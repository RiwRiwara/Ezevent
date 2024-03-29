<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => 'event_' . $this->faker->unique()->bothify('?###?##??###') ,
            'event_name' => $this->faker->unique()->sentence(3),
            'categories' => $this->faker->word,
            'contact_email' => 'admin@admin.com',
            'contact_phone' => '0812345678',
            'event_time' => 'announce_after',
            'time_start' => $this->faker->time(),
            'time_end' => $this->faker->time(),
            'venue' => 'online',
            'event_phase' => $this->faker->randomElement(['Initial', 'Upcoming', 'Ongoing', 'Reviewing', 'Complete', 'Archived']),
            'event_status' => $this->faker->randomElement(['Draft', 'Published', 'Cancelled']),
            'is_specific_date' => $this->faker->boolean(),
            'is_online' => $this->faker->boolean(),
            'is_deleted' => $this->faker->boolean(),
            'age_require' => $this->faker->numberBetween(1, 60),
            'limit_participant' => $this->faker->numberBetween(1, 1000),
            'limit_staff' => $this->faker->numberBetween(1, 100),
            'organizer_id' => User::where('email', 'admin@admin.com')->first()->user_id,
            'deleted_by' => null,
            'deleted_type' => null,
            'banner_text_bg' => '#000',
            'banner_text_color' => '#fff',
            'content-theme' => $this->faker->randomElement(['light', 'dark']),
            'created_at' => '2024-03-29 12:00:01',
            'updated_at' => '2024-03-29 12:00:01',
        ];
    }
}
