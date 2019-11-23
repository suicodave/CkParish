<?php

use App\StaticPermission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = StaticPermission::permissions();

        foreach ($permissions as $permission) {
            Artisan::call('permission:create-permission', [
                'name' => $permission
            ]);
        }
    }
}
