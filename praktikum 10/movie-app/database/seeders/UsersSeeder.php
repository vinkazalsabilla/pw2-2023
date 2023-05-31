<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        User::create([
            "nama" => "Vinka",
            "username" => "vinkaz",
            "password" => "NICE2022#!",
            "email" => "vinka@gmail.com",
            "role" => "Administrator"
        ]);

        User::create([
            "nama" => "Zalsabilla",
            "username" => "zalsa",
            "password" => "12345abcde",
            "email" => "zalsa@gmail.com",
            "role" => "User"
        ]);

        User::create([
            "nama" => "Example",
            "username" => "example",
            "password" => "exm1234#!",
            "email" => "example@gmail.com",
            "role" => "User"
        ]);
    }
}
