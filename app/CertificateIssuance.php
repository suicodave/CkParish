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
}
