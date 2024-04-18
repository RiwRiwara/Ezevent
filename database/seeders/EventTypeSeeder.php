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
            'name_th' => 'ความบันเทิง',
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
            'name_th' => 'การกุศล',
            'name_en' => 'Charity',
            'description' => 'Charity',
            'icon' => 'bi bi-heart',
        ]);

        EventType::create([
            'name_th' => 'การสัมมนา',
            'name_en' => 'Seminar',
            'description' => 'Seminar',
            'icon' => 'bi bi-mic',
        ]);

        EventType::create([
            'name_th' => 'สนุกสนาน',
            'name_en' => 'Workshop',
            'description' => 'funny',
            'icon' => 'bi bi-emoji-laughing',
        ]);

        EventType::create([
            'name_th' => 'การเงินการบัญชี',
            'name_en' => 'Conference',

            'description' => 'Finance',
            'icon' => 'bi bi-cash',
        ]);

        EventType::create([
            'name_th' => 'เกม และ อีสปอร์ต',
            'name_en' => 'Game',
            'description' => 'Game',
            'icon' => 'bi bi-joystick',
        ]);

        EventType::create([
            'name_th' => 'งานนิทรรศการ',
            'name_en' => 'Exhibition',
            'description' => 'Exhibition',
            'icon' => 'bi bi-image',
        ]);

        EventType::create([
            'name_th' => 'ศิลปะ และ การออกแบบ',
            'name_en' => 'Art',
            'description' => 'Art',
            'icon' => 'bi bi-palette',
        ]);

        EventType::create([
            'name_th' => 'เทคโนโลยี',
            'name_en' => 'Music',
            'description' => 'Technology',
            'icon' => 'bi bi-laptop',
        ]);

        EventType::create([
            'name_th' => 'หมวดอื่นๆ',
            'name_en' => 'Sport',
            'description' => 'Other',
            'icon' => 'bi bi-three-dots',
        ]);
        


    }
}
