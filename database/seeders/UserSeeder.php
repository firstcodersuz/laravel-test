<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"admin",
            'role_id'=>1,
            'email'=>"admin@gmail.com",
            'password'=>Hash::make('ruslan')
        ]);

        User::create([
            'name'=>"user",
            'role_id'=>2,
            'email'=>"user@gmail.com",
            'password'=>Hash::make('ruslan')
        ]);
    }
}
