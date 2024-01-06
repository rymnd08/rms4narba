<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInfo>
 */
class UserInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->lastName(),
            'last_name' => fake()->lastName(),
            'gender' => fake()->randomElement(['Male', 'Female', 'Others']),
            'address' => fake()->address(),
            'farm_name' => fake()->company(),
            'farm_location' => fake()->address(),
            'owned_rabbits' => 'Angora, LionHead, New Zealand',
            'image' => fake()->imageUrl()
        ];

    }
}
