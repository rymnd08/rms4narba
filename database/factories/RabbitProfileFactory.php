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
            'user_id' => fake()->numberBetween(1, 10),
            'rabbit_code' => fake()->randomLetter() .'-'. fake()->numberBetween(100, 1000),
            'rabbit_name' => fake()->name(),
            'cage_number' => fake()->numberBetween(1, 100),
            'sex' => fake()->randomElement(['Buck', 'Doe']),
            'type' => fake()->randomElement(['Meat', 'Pet']),
            'color' => fake()->colorName(),
            'breed' => fake()->randomElement([
                "Holland Lop",
                "Flemish Giant",
                "Mini Rex",
                "Netherland Dwarf",
                "Lionhead"
              ]),
            'birthdate' => fake()->date('Y-m-d'),
            'rabbit_image' =>  'https://api.dicebear.com/7.x/initials/svg?seed='.fake()->firstName() . '&chars=1',
            'description' => fake()->paragraph(1),
        ];
    }
}
