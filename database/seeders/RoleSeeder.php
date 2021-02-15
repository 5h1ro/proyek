<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Role::create(
            ['name' => 'Admin'],
        );
        $data->save();

        $data = Role::create(
            ['name' => 'User'],
        );
        $data->save();
    }
}
