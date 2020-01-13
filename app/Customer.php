<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $with = [
        'user'
    ];

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'sex',
        'birthdate',
        'created_by'
    ];


    function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    function parents()
    {
        return $this->hasMany('App\BiologicalParent'::class);
    }

    function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->middle_name} {$this->last_name}";
    }

    function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    function getMiddleNameAttribute($value)
    {
        return ucfirst($value);
    }

    function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }
}
