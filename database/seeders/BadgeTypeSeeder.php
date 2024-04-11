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
            'url' => 'https://ezeventstorage.blob.core.windows.net/resources/Property 1=Commubadge.png',
        ]);

        Badge::create([
            'name_th' => 'Leadership Skills',
            'name_en' => 'Leadership Skills',
            'description' => 'Leadership Skills',
            'icon' => 'bi bi-book',
            'url' => 'https://ezeventstorage.blob.core.windows.net/resources/Property 1=Learderbadge.png',
        ]);

        Badge::create([
            'name_th' => 'Teamwork Skills',
            'name_en' => 'Teamwork Skills',
            'description' => 'Teamwork Skills',
            'icon' => 'bi bi-book',
            'url' => 'https://ezeventstorage.blob.core.windows.net/resources/Property 1=Teamworkbadge.png',
        ]);

        Badge::create([
            'name_th' => 'Problem Solving Skills',
            'name_en' => 'Problem Solving Skills',
            'description' => 'Problem Solving Skills',
            'icon' => 'bi bi-book',
            'url' => 'https://ezeventstorage.blob.core.windows.net/resources/Property 1=Problembage.png',
        ]);


        Badge::create([
            'name_th' => 'Critical Thinking Skills',
            'name_en' => 'Critical Thinking Skills',
            'description' => 'Critical Thinking Skills',
            'icon' => 'bi bi-book',
            'url' => 'https://ezeventstorage.blob.core.windows.net/resources/Property 1=Thinkingbadge.png',
        ]);

        Badge::create([
            'name_th' => 'Learning Skills',
            'name_en' => 'Learning Skills',
            'description' => 'Learning Skills',
            'icon' => 'bi bi-book',
            'url' => 'https://ezeventstorage.blob.core.windows.net/resources/Learningbadge.png',
        ]);

        Badge::create([
            'name_th' => 'Knowledge Skills',
            'name_en' => 'Knowledge Skills',
            'description' => 'Knowledge Skills',
            'icon' => 'bi bi-book',
            'url' => 'https://ezeventstorage.blob.core.windows.net/resources/Property 1=Knowledgebadge.png',
        ]);

        Badge::create([
            'name_th' => 'Proffessional Skills',
            'name_en' => 'Proffessional Skills',
            'description' => 'Proffessional Skills',
            'icon' => 'bi bi-book',
            'url' => 'https://ezeventstorage.blob.core.windows.net/resources/Property 1=Professionalbadge.png',
        ]);
    }
}
