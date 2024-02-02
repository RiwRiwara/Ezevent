<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this ->faker->unique()->randomNumber(5),
            'first_name' => $this ->faker->name(),
            'last_name' => $this ->faker->name(),
            'gender' => $this ->faker->randomElement(['female', 'male', 'LGBTQ+']),
            'email' => $this ->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'mobile_number' => $this ->faker->phoneNumber(),
            'personality' => Str::random(4),
            'date_of_birth' => $this ->faker->date(),
            'address_1' => $this ->faker->address(),
            'province' => $this ->faker->state(),
            'district' => $this ->faker->city(),
            'post_id' => $this ->faker->postcode(),
            'profile_img' => $this ->faker->imageUrl(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
