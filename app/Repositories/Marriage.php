<?php

namespace App\Repositories;

use App\Marriage as AppMarriage;
use App\MarriageParticipant;
use Illuminate\Support\Facades\Auth;

class Marriage extends BaseRepository
{
    protected $model = AppMarriage::class;


    function create($attributes)
    {
        $creator = Auth::id();

        $attributes['created_by'] = $creator;

        $marriage = $this->model::create($attributes);

        $creator = Auth::id();

        $customers =   $attributes['customers'];

        foreach ($customers as $customer) {

            $customer['created_by'] = $creator;

            $createdCustomer = $this->createCustomer($customer);

            MarriageParticipant::create([
                'role' => $customer['role'],
                'marriage_id' => $marriage->id,
                'customer_id' => $createdCustomer->id
            ]);

            $sponsorNames = $this->prepareSponsorNames($customer['sponsors']);

            $parentNames = $this->prepareParentNames($customer['parents']);

            $marriage->sponsors()->createMany($sponsorNames);

            $createdCustomer->parents()->createMany($parentNames);
        }

        return $marriage;
    }


    function show($id)
    {
        $marriage = $this->model::with([
            'sponsors:name as value,sponsorable_type,sponsorable_id'
        ])->find($id);

        $husband = $this->getParticipant($id, 'Husband');

        $wife = $this->getParticipant($id, 'Wife');

        return [
            'marriage' => $marriage,
            'husband' => $husband,
            'wife' => $wife
        ];
    }


    protected function getParticipant($marriageId, $role)
    {

        return $this->model::with(['participants' => function ($query) use ($role) {

            return $query->with('customer.parents:customer_id,name as value,relationship,residence,citizenship')
                ->where('role', $role)->first();
        }])
            ->where('id', $marriageId)
            ->first()
            ->participants
            ->first();
    }
}
