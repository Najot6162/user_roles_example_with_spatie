<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@ecom.uz',
            'password' => Hash::make('password'),
        ]);

         $user->assignRole('admin');
        $user = User::create([
            'name' => 'Setora',
            'email' => 'setora0877@gmail.com',
            'password' => Hash::make('password'),
        ]);
          $user->assignRole('editor');
    }
}
