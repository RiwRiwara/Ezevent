<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventType;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventType::create([
            'name_th' => 'Entertainment',
            'name_en' => 'Entertainment',
            'description' => 'Entertainment',
            'icon' => 'bi bi-server',
        ]);

        EventType::create([
            'name_th' => 'Education',
            'name_en' => 'Education',
            'description' => 'Education',
            'icon' => 'bi bi-book',
        ]);

        EventType::create([
            'name_th' => 'Charity',
            'name_en' => 'Charity',
            'description' => 'Charity',
            'icon' => 'bi bi-heart',
        ]);

        EventType::create([
            'name_th' => 'Seminar',
            'name_en' => 'Seminar',
            'description' => 'Seminar',
            'icon' => 'bi bi-mic',
        ]);

        EventType::create([
            'name_th' => 'Workshop',
            'name_en' => 'Workshop',
            'description' => 'funny',
            'icon' => 'bi bi-emoji-laughing',
        ]);

        EventType::create([
            'name_th' => 'Conference',
            'name_en' => 'Conference',

            'description' => 'Finance',
            'icon' => 'bi bi-cash',
        ]);

        EventType::create([
            'name_th' => 'Game',
            'name_en' => 'Game',
            'description' => 'Game',
            'icon' => 'bi bi-joystick',
        ]);

        EventType::create([
            'name_th' => 'Exhibition',
            'name_en' => 'Exhibition',
            'description' => 'Exhibition',
            'icon' => 'bi bi-image',
        ]);

        EventType::create([
            'name_th' => 'Art',
            'name_en' => 'Art',
            'description' => 'Art',
            'icon' => 'bi bi-palette',
        ]);

        EventType::create([
            'name_th' => 'Music',
            'name_en' => 'Music',
            'description' => 'Technology',
            'icon' => 'bi bi-laptop',
        ]);

        EventType::create([
            'name_th' => 'Sport',
            'name_en' => 'Sport',
            'description' => 'Other',
            'icon' => 'bi bi-three-dots',
        ]);
        


    }
}
