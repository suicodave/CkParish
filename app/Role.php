<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    const ADMINISTRATOR = 'administrator';


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('administrator', function (Builder $builder) {
            $builder->where('name', '<>', self::ADMINISTRATOR);
        });
    }
}
