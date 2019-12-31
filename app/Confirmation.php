<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    protected $with = [
        'customer'
    ];

    protected $fillable = [
        'customer_id',
        'priest_name',
        'confirmation_date'
    ];

    function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    function sponsors()
    {
        return $this->morphMany('App\Sponsor', 'sponsorable');
    }

    function parents()
    {
        return $this->morphMany('App\BiologicalParent', 'parentable');
    }

    function getConfirmationDateAttribute($value)
    {
        return new Carbon($value);
    }

    function getCreatedTimeAttribute($value)
    {
        return $this->created_at->format('g:i A');
    }

    function getUpdatedTimeAttribute($value)
    {
        return $this->updated_at->format('g:i A');
    }
}
