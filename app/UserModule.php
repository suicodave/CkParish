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
                'link' => route('users.index'),
                'permission' => StaticPermission::VIEW_USER_COMPONENT
            ],
            [
                'name' => 'User Roles',
                'description' => 'User roles management. Associate roles to permissions to easily bind a set of privileges to users.',
                'link' => route('roles.index'),
                'permission' => StaticPermission::VIEW_ROLE_COMPONENT
            ],
            [
                'name' => 'User Permissions',
                'description' => 'User permissions management regulates user access according to the organization\'s policy.',
                'link' => route('permissions.index'),
                'permission' => StaticPermission::VIEW_PERMISSION_COMPONENT
            ],
            [
                'name' => 'Confirmation Registry',
                'description' => 'Manage confirmees including certificate issuances.',
                'link' => route('confirmations.index'),
                'permission' => StaticPermission::VIEW_CONFIRMATION_COMPONENT
            ]

        ];
    }
}
