<?php

namespace App\Traits;

use App\Role;
use Illuminate\Support\Arr;

trait ChecksRoleOrPermission
{
    function checkRoleOrPermissions($roleOrPermissionNames)
    {
        $names = $this->flatten([
            'auth',
            Role::ADMINISTRATOR,
            $roleOrPermissionNames
        ]);

        $middlewareString = $this->glueNames($names);

        return $this->middleware($middlewareString);
    }

    private function flatten($names)
    {
        return Arr::flatten($names);
    }

    private function glueNames($names)
    {
        $middleware = 'role_or_permission:';

        $stringifiedNames = implode('|', $names);

        return $middleware . $stringifiedNames;
    }
}
