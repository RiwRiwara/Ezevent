<?php

namespace Database\Seeders;

use App\Models\GiveBadge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GiveBadgeSeeder extends Seeder
{
    public function run(): void
    {
        $users = \App\Models\User::all();
        $badges = \App\Models\Badge::all();
        $events = \App\Models\Event::all();

        $giveBadges = [];

        foreach ($users as $user) {
            $rand = rand(1, 5);
            for ($i = 0; $i < $rand; $i++) {
                $giveBadges[] = [
                    'badge_id' => $badges->random()->id,
                    'user_id' => $user->user_id,
                    'event_id' => $events->random()->event_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        GiveBadge::insert($giveBadges);
    }
}
