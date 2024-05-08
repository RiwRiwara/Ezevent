<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Event;

class InboxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'inbox_id' => 'inbox_' . $this->faker->unique()->bothify('?###?##??###') ,
            'status' => $this->faker->randomElement(['Unread', 'Read', 'Deleted']),
            'inbox_type' => $this->faker->randomElement(['All', 'Staff', 'Participant']),
            'subject' => $this->faker->sentence(3),
            'body' => $this->faker->sentence(3),
            'event_id' => Event::where('event_name', 'งานแสดงสินค้าและบริการ 2024')->first()->event_id,
            'user_recieve_id' => User::where('email', 'admin@admin.com')->first()->user_id,
            'created_at' => '2024-03-29 12:00:01',
            'updated_at' => '2024-03-29 12:00:01',
        ];
    }
}
            
