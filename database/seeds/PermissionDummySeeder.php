<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionDummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permission::class, 5000)->create();
    }
}
