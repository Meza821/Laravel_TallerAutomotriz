<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creacion de usuarios
        DB::table('users')->insert([
            [
                'name' => 'David Rosales',
                'email' => 'david@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('admin'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kevin Meza',
                'email' => 'meza96hw@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('admin'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
