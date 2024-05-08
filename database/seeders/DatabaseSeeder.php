<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(EventTypeSeeder::class);
        $this->call(BadgeTypeSeeder::class);



        $userData = include(database_path('seeders/testUser.php'));
        foreach ($userData as $user) {
            \App\Models\User::factory()->create($user);
        }

        $this->call(EventSeeder::class);

        $this->call(ApplicationSeeder::class);

        $this->call(InboxSeeder::class);

        $this->call(GiveBadgeSeeder::class);
    }
}
