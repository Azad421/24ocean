<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = ['name' => 'User', 'profile_pic' => 'profile.png', 'gender' => 'Male', 'email' => 'user@gmail.com', 'is_verified' => 1, 'password' => Hash::make('password')];
        User::create($user);
    }
}
