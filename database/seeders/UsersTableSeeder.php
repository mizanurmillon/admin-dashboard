<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Admin',
                'last_name' => null,
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'avatar' => 'backend/assets/images/user/7.jpg',
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'first_name' => 'user',
                'last_name' => null,
                'email' => 'user@user.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'avatar' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'first_name' => 'Md Mizanur',
                'last_name' => 'Rahman',
                'email' => 'mr7517218@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'avatar' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
        ]);
    }
}
