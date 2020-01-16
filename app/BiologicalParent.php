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
}
