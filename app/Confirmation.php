<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    protected $fillable = [
        'customer_id',
        'priest_name',
        'confirmation_date'
    ];

    function customer()
    {
        return $this->belongsTo('App\Customer');
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
