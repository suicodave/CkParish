<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    protected $fillable = [
        'priest_id',
        'wedding_date',
        'created_by'
    ];

    protected $with = [
        'participants'
    ];

    protected $casts = [
        'wedding_date' => 'date'
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

    function priest()
    {
        return $this->belongsTo(Priest::class);
    }

    function getLink($id)
    {
        return route('marriages.show', [
            'marriage' => $id
        ]);
    }

    function getCustomerNameAttribute($value)
    {
        return $this->married_names;
    }

    function getUpdatedTimeAttribute($value)
    {
        return $this->updated_at->format('g:i A');
    }

    function getPriestNameAttribute($value)
    {
        return ucwords($this->priest->name);
    }
}
