<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarriageParticipant extends Model
{
    protected $with = [
        'customer'
    ];

    protected $fillable = [
        'role',
        'marriage_id',
        'customer_id'
    ];


    function marriage()
    {
        return $this->belongsTo(Marriage::class);
    }

    function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
