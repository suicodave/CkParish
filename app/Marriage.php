<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    protected $fillable = [
        'priest_name',
        'wedding_date'
    ];

    function participants()
    {
        return $this->hasMany(MarriageParticipant::class);
    }


    function parents()
    {
        return $this->morphMany(BiologicalParent::class, 'parentable');
    }


    function sponsors()
    {
        return $this->morphMany(Sponsor::class, 'sponsorable');
    }
}
