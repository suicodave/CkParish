<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'birthdate',
        'created_by'
    ];

    function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
