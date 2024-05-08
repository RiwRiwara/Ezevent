<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InboxSeeder extends Seeder
{
    public function run(): void
    {
        $InboxData = include(database_path('seeders/testInbox.php'));
        foreach ($InboxData as $inbox) {
            \App\Models\Inbox::factory()->create($inbox);
        }
    }
}
