<?php

namespace App\Repositories;

use App\Customer;
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

        $sponsorNames = $this->prepareSponsorNames($attributes['sponsors']);

        $marriage->sponsors()->createMany($sponsorNames);

        foreach ($customers as $customer) {

            $customer['created_by'] = $creator;

            $createdCustomer = $this->createCustomer($customer);

            MarriageParticipant::create([
                'role' => $customer['role'],
                'marriage_id' => $marriage->id,
                'customer_id' => $createdCustomer->id
            ]);

            $parentNames = $this->prepareParentNames($customer['parents']);

            $createdCustomer->parents()->createMany($parentNames);
        }

        return $marriage;
    }

    function update($attributes, $id)
    {
        $marriage = $this->model::find($id);

        $marriage->update($attributes);

        $sponsorNames = $this->prepareSponsorNames($attributes['sponsors']);

        $marriage->sponsors()->delete();

        $marriage->sponsors()->createMany($sponsorNames);

        $participants = $attributes['customers'];

        foreach ($participants as  $participantAttribute) {

            $participant = MarriageParticipant::find($participantAttribute['participant_id']);

            $customer = $participant->customer;

            $customer->update($participantAttribute);

            $parentNames = $this->prepareParentNames($participantAttribute['parents']);

            $customer->parents()->delete();

            $customer->parents()->createMany($parentNames);
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


    function getParticipant($marriageId, $role)
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
