<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Badge;


class BadgeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Badge::create([
            'name_th' => 'Communication Skills',
            'name_en' => 'Communication Skills',
            'description' => 'Communication Skills',
            'icon' => 'bi bi-book',
        ]);

        Badge::create([
            'name_th' => 'Leadership Skills',
            'name_en' => 'Leadership Skills',
            'description' => 'Leadership Skills',
            'icon' => 'bi bi-book',
        ]);

        Badge::create([
            'name_th' => 'Teamwork Skills',
            'name_en' => 'Teamwork Skills',
            'description' => 'Teamwork Skills',
            'icon' => 'bi bi-book',
        ]);

        Badge::create([
            'name_th' => 'Problem Solving Skills',
            'name_en' => 'Problem Solving Skills',
            'description' => 'Problem Solving Skills',
            'icon' => 'bi bi-book',
        ]);

        Badge::create([
            'name_th' => 'Creativity Skills',
            'name_en' => 'Creativity Skills',
            'description' => 'Creativity Skills',
            'icon' => 'bi bi-book',
        ]);

        Badge::create([
            'name_th' => 'Adaptability Skills',
            'name_en' => 'Adaptability Skills',
            'description' => 'Adaptability Skills',
            'icon' => 'bi bi-book',
        ]);

        Badge::create([
            'name_th' => 'Time Management Skills',
            'name_en' => 'Time Management Skills',
            'description' => 'Time Management Skills',
            'icon' => 'bi bi-book',
        ]);

        Badge::create([
            'name_th' => 'Critical Thinking Skills',
            'name_en' => 'Critical Thinking Skills',
            'description' => 'Critical Thinking Skills',
            'icon' => 'bi bi-book',
        ]);

        


    }
}
