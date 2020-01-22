<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    protected $fillable = [
        'priest_name',
        'wedding_date',
        'created_by'
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

    function issuances()
    {
        return $this->morphMany('App\CertificateIssuance', 'issuable');
    }

    function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    function getMarriedNamesAttribute()
    {
        $participants = $this->participants
            ->map(function ($participant) {
                $customer = $participant
                    ->customer;

                return $customer->first_name . " " . $customer->last_name;
            })->all();

        return implode(" and ", $participants);
    }

    function getPriestNameAttribute($value)
    {
        return ucwords($value);
    }
}
