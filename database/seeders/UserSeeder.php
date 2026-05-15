<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = array(
            array('name' => 'Shihab Uddin', 'email' => 'ss@gmail.com', 'password' => Hash::make('1234'), 'created_at' => now(), 'updated_at' => now())
        );

        User::insert($users);
    }
}
