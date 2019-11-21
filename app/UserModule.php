<?php

namespace App;

class UserModule
{
    static function modules()
    {
        return  [
            // [
            //     'name' => 'Users',
            //     'description' => 'User administration and management.'
            // ],
            [
                'name' => 'Roles and Permissions',
                'description' => 'User roles and permissions management. Regulates user access according to the organization\'s policy.',
                'link' => route('permissions.index')
            ],
        ];
    }
}
