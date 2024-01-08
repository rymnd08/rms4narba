<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BreedingProfile>
 */
class BreedingProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rabbit_id' => fake()->numberBetween(1,10),
            'mated_to_rabbit_id' => fake()->numberBetween(1,10),
            'cage_number' => fake()->numberBetween(1,20),
            'mating_date' => fake()->date('Y-m-d'),
            'birthdate' => fake()->date('Y-m-d'),
            'kindling_date' => fake()->date('Y-m-d'),
            'number_of_kits' => fake()->numberBetween(1,5),
            'alive_kits' => fake()->numberBetween(1,5),
            'dead_kits' => fake()->numberBetween(1,5),
            'remarks' => fake()->paragraph(1)
        ];

        // $table->id();
        // $table->unsignedBigInteger('rabbit_id');
        // $table->unsignedBigInteger('mated_to_rabbit_id');
        // $table->string('cage_number');
        // $table->date('mating_date');
        // $table->date('birthdate')->nullable();
        // $table->date('kindling_date')->nullable();
        // $table->integer('number_of_kits')->nullable();
        // $table->integer('alive_kits')->nullable();
        // $table->integer('dead_kits')->nullable();
        // $table->text('remarks')->nullable();
        // $table->timestamps();

        // $table->foreign('rabbit_id')->references('id')->on('rabbit_profiles');
        // $table->foreign('mated_to_rabbit_id')->references('id')->on('rabbit_profiles');

    }
}
