<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInfo>
 */
class UserInfoFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween(1, 3),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->lastName(),
            'last_name' => fake()->lastName(),
            'gender' => fake()->randomElement(['Male', 'Female', 'Others']),
            'address' => fake()->address(),
            'image' => fake()->imageUrl()
        ];

    }
}
