<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificateIssuance extends Model
{
    protected $fillable = [
        'priest_name',
        'purpose',
        'user_id'
    ];

    protected $with = [
        'user:id,email'
    ];

    function issuable()
    {
        return $this->morphTo();
    }

    function getPurposeAttribute($value)
    {
        return ucwords($value);
    }

    function getPriestNameAttribute($value)
    {
        return ucwords($value);
    }

    function user()
    {
        return $this->belongsTo('App\User');
    }

    function getFormattedTypeAttribute()
    {
        return str_replace('App\\', '', $this->attributes['issuable_type']);
    }
}
