<?php

namespace App\Repositories;

use App\Customer;

class BaseRepository
{
    protected $model;

    function all($columns = [])
    {
        return $this->model::latest()->all();
    }

    function paginate($items = 15)
    {
        return $this->model::latest()->paginate($items);
    }

    function find($id)
    {
        return $this->model::find($id);
    }

    function createCustomer($attributes)
    {
        $customer = Customer::create($attributes);

        return $customer;
    }

    function prepareNameList($names)
    {
        $names = array_filter($names, function ($name) {
            return trim($name) != '';
        });
        return array_map(function ($name) {
            return [
                'name' => $name
            ];
        }, $names);
    }

    function prepareSponsorNames($names)
    {
        return $this->prepareNameList($names);
    }

}
