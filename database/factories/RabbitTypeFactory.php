<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RabbitType>
 */
class RabbitTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rabbit_type' => fake()->unique()->randomElement(['Meat', 'Pet']),
            'description' => fake()->paragraph(1),
        ];
    }
}
