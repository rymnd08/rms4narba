<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RabbitProfile>
 */
class RabbitProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'farm_id' => fake()->randomElement([1,2]),
            'rabbit_code' => fake()->randomLetter() .'-'. fake()->numberBetween(100, 1000),
            'rabbit_name' => fake()->name(),
            'cage_number' => fake()->numberBetween(1, 100),
            'sex' => fake()->randomElement(['Buck', 'Doe']),
            'type_id' => fake()->randomElement([1,2]),
            'color' => fake()->randomElement(['Pink', 'Red']),
            'breed_id' => fake()->numberBetween(1,2),
            'birthdate' => fake()->date('Y-m-d'),
            'image' =>  null,
            'description' => fake()->paragraph(1),
        ];
    }
}
