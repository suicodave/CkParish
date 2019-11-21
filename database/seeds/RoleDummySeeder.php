<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleDummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class, 50)->create();
    }
}
