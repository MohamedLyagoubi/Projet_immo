<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
                'address' => $faker->address,
            ],

            // Agent
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent1@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'agent',
                'status' => 'active',
                'address' => $faker->address,
            ],

            // User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
                'address' => $faker->address,
            ],
        ]);
    }
}
