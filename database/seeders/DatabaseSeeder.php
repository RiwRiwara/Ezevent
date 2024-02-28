<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'Awirut',
            'last_name' => 'Phuseansaart',
            'email' => 'awirut2629@gmail.com',
            'password' => bcrypt('.Awirut3526293'),
            'mobile_number' => '0925121273',
            'date_of_birth' => '2024-02-07 00:00:00',
            'address' => '123/456',
            'province' => '5',
            'district' => '1401',
            'city' => '140101',
            'zipcode' => '10260',
            'role' => 'admin',
            'email_verified_at' => '2024-02-22 15:22:04',


        ]);
    }
}
