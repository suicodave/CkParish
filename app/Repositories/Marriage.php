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

    function prepareNameList($names)
    {
        $names = array_filter($names, function ($name) {
            return count($name) != 0 || !isNull($name);
        });

        return array_map(function ($name) {
            return $name;
        }, $names);
    }
}
