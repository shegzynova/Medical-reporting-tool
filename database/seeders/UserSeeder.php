<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\AdminUserFactory;
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
        User::factory()
            ->count(100)
            ->create();

        User::create([
            'first_name' => 'Michalis',
            'last_name' => 'Antoniou',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('Admin2021@'), // Admin2021@
        ]);

        User::create([
            'first_name' => 'Ejhnhdui',
            'last_name' => 'Eisos',
            'email' => 'nurse@example.com',
            'role' => 'nurse',
            'password' => Hash::make('Admin2021@'), // Admin2021@
        ]);

        User::create([
            'first_name' => 'Isjiji',
            'last_name' => 'Uisoj',
            'email' => 'doctor@example.com',
            'role' => 'doctor',
            'password' => Hash::make('Admin2021@'), // Admin2021@
        ]);


    }
}
