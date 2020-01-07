<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable =  [
        'name',
        'relation'
    ];

    function sponsorable()
    {
        return $this->morphTo();
    }

    function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
