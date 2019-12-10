<?php

namespace App\Repositories;

use App\Confirmation as AppConfirmation;
use App\Customer;

class Confirmation extends BaseRepository
{
    protected $model = AppConfirmation::class;

    function create($attributes)
    {
        $customer = Customer::create($attributes);

        $attributes['customer_id'] = $customer->id;

        $confirmation = $this->model::create($attributes);

        return $confirmation;
    }
}
