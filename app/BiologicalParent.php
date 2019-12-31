<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiologicalParent extends Model
{
    protected $table = 'parents';

    protected $fillable =  [
        'name'
    ];

    function parentable()
    {
        return $this->morphTo();
    }

    function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
