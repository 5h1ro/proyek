<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data =  User::create([
            'username' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('Admin'),
            'alamat' => 'Madiun',
            'noHp' => '000',
            'role' => 0,
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'User',
            'email' => 'User@gmail.com',
            'password' => Hash::make('User'),
            'alamat' => 'Madiun',
            'noHp' => '111',
            'role' => 1,
        ]);
        $data->save();
    }
}
