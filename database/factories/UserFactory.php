<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'user_type_id' => fake()->randomElement([1,2,3]),
            'email' => fake()->unique()->safeEmail(),
            'user_name' => fake()->unique()->userName(),
            'email_verified_at' => now(),
            'password' => fake()->md5('123456'),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
