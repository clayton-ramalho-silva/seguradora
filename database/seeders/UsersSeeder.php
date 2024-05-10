<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
            'name' => 'User Middleware',
            'email' => 'user@middleware.com',
            'password' => Hash::make('123456789'),
            ],
        ];

        foreach($users as $key => $user){
            User::create($user);
        }
    }
}
