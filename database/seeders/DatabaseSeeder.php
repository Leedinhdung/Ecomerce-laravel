<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'image_user' => 'https://i.imgur.com/333333.png',
            'fullname' => 'Lê Đình Dũng',
            'email' => 'Dinhdung160304@gmail.com',
            'phone' => '0987654321',
            'password' => Hash::make('Dinhdung16@'),
        ]);
    }
}
