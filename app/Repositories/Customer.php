<?php

namespace App\Repositories;

use App\Customer as AppCustomer;

class Customer
{
    function create($attributes)
    {
        $customer = AppCustomer::create($attributes);
    }
}
