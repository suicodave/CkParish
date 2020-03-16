<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificateIssuance extends Model
{
    protected $fillable = [
        'priest_id',
        'purpose',
        'user_id'
    ];

    protected $with = [
        'user:id,email'
    ];

    function priest()
    {
        return $this->belongsTo(Priest::class);
    }

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
        return ucwords($this->priest->name);
    }

    function user()
    {
        return $this->belongsTo('App\User');
    }

    function getFormattedTypeAttribute()
    {
        return str_replace('App\\', '', $this->attributes['issuable_type']);
    }

    function getCreatedTimeAttribute($value)
    {
        return $this->created_at->format('g:i A');
    }
}
