<?php

namespace App;

class UserModule
{
    static function modules()
    {
        return  [
            [
                'name' => 'Users',
                'description' => 'Manage users who use the application.',
                'link' => route('users.index')
            ],
            [
                'name' => 'User Roles',
                'description' => 'User roles management. Associate roles to permissions to easily bind a set of privileges to users.',
                'link' => route('roles.index')
            ],
            [
                'name' => 'User Permissions',
                'description' => 'User permissions management regulates user access according to the organization\'s policy.',
                'link' => route('permissions.index')
            ],

        ];
    }
}
