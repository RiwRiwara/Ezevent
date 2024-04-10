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
            'name_th' => 'สื่อบันเทิง',
            'name_en' => 'Entertainment',
            'description' => 'Entertainment',
            'icon' => 'bi bi-server',
        ]);

        EventType::create([
            'name_th' => 'การศึกษา',
            'name_en' => 'Education',
            'description' => 'Education',
            'icon' => 'bi bi-book',
        ]);

        EventType::create([
            'name_th' => 'งานการกุศล',
            'name_en' => 'Charity',
            'description' => 'Charity',
            'icon' => 'bi bi-heart',
        ]);

        EventType::create([
            'name_th' => 'งานสัมมนา',
            'name_en' => 'Seminar',
            'description' => 'Seminar',
            'icon' => 'bi bi-mic',
        ]);

        EventType::create([
            'name_th' => 'เวิร์คช้อป',
            'name_en' => 'Workshop',
            'description' => 'funny',
            'icon' => 'bi bi-emoji-laughing',
        ]);

        EventType::create([
            'name_th' => 'ประชุม',
            'name_en' => 'Conference',

            'description' => 'Finance',
            'icon' => 'bi bi-cash',
        ]);

        EventType::create([
            'name_th' => 'เกม',
            'name_en' => 'Game',
            'description' => 'Game',
            'icon' => 'bi bi-joystick',
        ]);

        EventType::create([
            'name_th' => 'นิทรรศการ',
            'name_en' => 'Exhibition',
            'description' => 'Exhibition',
            'icon' => 'bi bi-image',
        ]);

        EventType::create([
            'name_th' => 'ศิลปะ',
            'name_en' => 'Art',
            'description' => 'Art',
            'icon' => 'bi bi-palette',
        ]);

        EventType::create([
            'name_th' => 'ดนตรี',
            'name_en' => 'Music',
            'description' => 'Technology',
            'icon' => 'bi bi-laptop',
        ]);

        EventType::create([
            'name_th' => 'กีฬา',
            'name_en' => 'Sport',
            'description' => 'Other',
            'icon' => 'bi bi-three-dots',
        ]);
        


    }
}
