<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\AdminUserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seed to create 100 users
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(100)
            ->create();

        //Seeding an admin user
        User::create([
            'first_name' => 'Michalis',
            'last_name' => 'Antoniou',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('Admin2021@'), // Admin2021@
        ]);

        //Seeding a nurse user
        User::create([
            'first_name' => 'Ejhnhdui',
            'last_name' => 'Eisos',
            'email' => 'nurse@example.com',
            'role' => 'nurse',
            'password' => Hash::make('Admin2021@'), // Admin2021@
        ]);


        //Seeding a doctor user
        User::create([
            'first_name' => 'Isjiji',
            'last_name' => 'Uisoj',
            'email' => 'doctor@example.com',
            'role' => 'doctor',
            'password' => Hash::make('Admin2021@'), // Admin2021@
        ]);


    }
}
