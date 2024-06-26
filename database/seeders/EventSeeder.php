<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $eventData = include(database_path('seeders/testEvent.php'));
        foreach ($eventData as $event) {
            \App\Models\Event::factory()->create($event);
        }
    }
}
