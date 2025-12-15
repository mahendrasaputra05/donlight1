<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nama' => 'Owner Donlight',
            'username' => 'owner',
            'email' => 'owner@donlight.com',
            'password' => Hash::make('123456'),
            'alamat' => 'Owner Address',
            'role' => 'owner',
        ]);

        User::create([
            'nama' => 'Admin Donlight',
            'username' => 'admin',
            'email' => 'admin@donlight.com',
            'password' => Hash::make('123456'),
            'alamat' => 'Admin Address',
            'role' => 'admin',
        ]);

        User::create([
            'nama' => 'Kasir Donlight',
            'username' => 'kasir',
            'email' => 'kasir@donlight.com',
            'password' => Hash::make('123456'),
            'alamat' => 'Kasir Address',
            'role' => 'kasir',
        ]);
    }
}
