<?php

namespace App\Repositories;

use App\Confirmation as AppConfirmation;

class Confirmation extends BaseRepository
{
    protected $model = AppConfirmation::class;

    function create($attributes)
    {
        $customer = $this->createCustomer($attributes);

        $attributes['customer_id'] = $customer->id;

        $confirmation = $this->model::create($attributes);

        return $confirmation;
    }
}
