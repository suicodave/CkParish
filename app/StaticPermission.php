<?php

namespace App;

use ReflectionClass;

class StaticPermission
{

    const VIEW_USER_COMPONENT = 'view user component';

    const VIEW_ROLE_COMPONENT = 'view role component';

    const VIEW_PERMISSION_COMPONENT = 'view permission component';

    const VIEW_CONFIRMATION_COMPONENT = 'view confirmation component';

    const CREATE_ROLE = 'create role';

    const UPDATE_ROLE = 'update role';

    const CREATE_USER = 'create user';

    const UPDATE_USER = 'update user';

    const CREATE_CONFIRMATION = 'create confirmation';

    const UPDATE_CONFIRMATION = 'update confirmation';

    const ISSUE_CONFIRMATION_CERTIFICATE = 'issue confirmation certificate';

    function predefinedPermissions()
    {
        $reflectionClass = new ReflectionClass($this);

        return $reflectionClass->getConstants();
    }

    static function permissions()
    {
        return (new static())->predefinedPermissions();
    }
}
