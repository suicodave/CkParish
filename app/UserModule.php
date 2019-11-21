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
                'name' => 'User Permissions',
                'description' => 'User permissions management regulates user access according to the organization\'s policy.',
                'link' => route('permissions.index')
            ],
        ];
    }
}
