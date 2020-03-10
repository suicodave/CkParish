<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priest extends Model
{
    protected $fillable = [
        'name',
        'created_by'
    ];

    function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
