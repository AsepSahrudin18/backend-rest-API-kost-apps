<?php

namespace Database\Seeders\Auth;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user = [
                [
                    "id" => 1,
                    "name" => "Asep Sahrudin",
                    "email" => "asepsahrudin0399@gmail.com",
                    "password" => Hash::make('skripsi#!'),
                    "role_id" => 1,
                ],
                [
                    "id" => 2,
                    "name" => "Owner",
                    "email" => "owner@gmail.com",
                    "password" => Hash::make('skripsi#!'),
                    "role_id" => 2,
                ],
                [
                    "id" => 3,
                    "name" => "Administrator",
                    "email" => "admin@gmail.com",
                    "password" => Hash::make('skripsi#!'),
                    "role_id" => 3,
                ],
            ];
        DB::table('users')->insert($user);
    }
}
