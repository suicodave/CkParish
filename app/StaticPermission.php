<?php

namespace App;

use ReflectionClass;

class StaticPermission
{

    const VIEW_USER_COMPONENT = 'view user component';

    const VIEW_ROLE_COMPONENT = 'view role component';

    const VIEW_PERMISSION_COMPONENT = 'view permission component';

    const VIEW_CONFIRMATION_COMPONENT = 'view confirmation component';

    const VIEW_BAPTISMAL_COMPONENT = 'view baptismal component';

    const VIEW_MARRIAGE_COMPONENT = 'view marriage component';

    const VIEW_CERTIFICATE_ISSUANCES = 'view certificate issuances';

    const CREATE_ROLE = 'create role';

    const UPDATE_ROLE = 'update role';

    const CREATE_USER = 'create user';

    const UPDATE_USER = 'update user';

    const CREATE_CONFIRMATION = 'create confirmation';

    const UPDATE_CONFIRMATION = 'update confirmation';

    const ISSUE_CONFIRMATION_CERTIFICATE = 'issue confirmation certificate';

    const CREATE_BAPTISMAL = 'create baptismal record';

    const UPDATE_BAPTISMAL = 'update baptismal record';

    const ISSUE_BAPTISMAL_CERTIFICATE = 'issue baptismal certificate';

    const CREATE_MARRIAGE = 'create marriage record';

    const UPDATE_MARRIAGE = 'update marriage record';

    const ISSUE_MARRIAGE_CERTIFICATE = 'issue marriage certificate';

    const VIEW_PRIEST_COMPONENT = 'view priest component';

    const CREATE_PRIEST = 'create priest\'s record';

    const UPDATE_PRIEST = 'update priest\'s record';



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
