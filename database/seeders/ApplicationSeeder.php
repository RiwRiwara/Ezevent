<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Event;
use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Random users
        $RandomUsers = User::inRandomOrder()->limit(40)->get();

        // Get first event
        $event = Event::first();

        // Create application for each user
        foreach ($RandomUsers as $user) {

            // Random Type Participant(80%)or Staff(20%)
            $type = rand(1, 100) <= 80 ? 'Participant' : 'Staff';
            
            Application::create([
                'application_id' => uniqid('application_'),
                'event_id' => $event->event_id,
                'user_id' => $user->user_id,
                'form_id' => null,
                'type' => $type,
                'status' => 'Pending',
                'message' => null,
                'application_date' => now(),
            ]);
        }
    }
}
