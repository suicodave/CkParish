<?php

namespace App\Repositories;

use App\Customer;

class BaseRepository
{
    protected $model;

    function all($columns = [])
    {
        return $this->model::all();
    }

    function paginate($items = 15)
    {
        return $this->model::paginate($items);
    }

    function createCustomer($attributes)
    {
        $customer = Customer::create($attributes);

        return $customer;
    }
}
