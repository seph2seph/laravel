<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(value: 'admin123'),
            'role_id' => 1, // Admin,
            ]
        ];
        DB::table(table:'users')->insert($user);
    }
}
