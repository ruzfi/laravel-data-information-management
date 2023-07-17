<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'firstName' => 'John',
                'lastName' => 'Hartano',
                'email' => 'john@platmerah.com',
                'password' => Hash::make('password'),
                'role' => 1,
            ],
            [
                'firstName' => 'Jane',
                'lastName' => 'Sutanto',
                'email' => 'jane@platmerah.com',
                'password' => Hash::make('password'),
                'role' => 2,
            ],
            [
                'firstName' => 'Mike',
                'lastName' => 'Siregar',
                'email' => 'mike@platmerah.com',
                'password' => Hash::make('password'),
                'role' => 3,
            ],
        ]);
    }
}
