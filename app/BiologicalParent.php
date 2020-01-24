<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiologicalParent extends Model
{
    protected $table = 'parents';

    protected $fillable =  [
        'name',
        'relationship',
        'citizenship',
        'residence'
    ];



    function getNameAttribute($value)
    {
        return ucwords($value);
    }

    function getCitizenshipAttribute($value)
    {
        return ucwords($value);
    }

    function getRelationshipAttribute($value)
    {
        return ucwords($value);
    }

    function getResidenceAttribute($value)
    {
        return ucfirst($value);
    }
}
