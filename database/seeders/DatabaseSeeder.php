<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserTypeSeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            UserInfoSeeder::class,
            FarmSeeder::class,
            FarmUserSeeder::class,
            RabbitTypeSeeder::class,
            BreedSeeder::class,
            RabbitProfileSeeder::class,
            BreedingProfileSeeder::class,
        ]);
    }
}
