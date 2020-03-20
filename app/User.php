<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles, SoftDeletes;



    function getNameAttribute()
    {
        return ucwords("{$this->first_name}  {$this->middle_name} {$this->last_name}");
    }

    function getFirstNameAttribute($value)
    {
        return ucwords($value);
    }

    function getMiddleNameAttribute($value)
    {
        return ucwords($value);
    }

    function getLastNameAttribute($value)
    {
        return ucwords($value);
    }

    function scopeNonAdministrator($query)
    {
        return $query->whereDoesntHave('roles', function (Builder $q) {
            return $q->where('name', Role::ADMINISTRATOR);
        });
    }

    function hasModule($permission)
    {

        return $this->hasPermissionTo($permission) || $this->hasRole(Role::ADMINISTRATOR);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'has_changed_default_password',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
