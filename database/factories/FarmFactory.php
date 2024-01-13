<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Farm>
 */
class FarmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'phone_1' => fake()->phoneNumber(),
            'phone_2' => fake()->phoneNumber(),
            'email' => fake()->unique()->email(),
            'other_contact' => fake()->url(),
            'farm_name' => fake()->company(),
            'farm_location' => fake()->address(),
            'owned_rabbits' => fake()->randomElement(['Lion Head', 'Californian', 'New Zealand']),
        ];
    }
}
