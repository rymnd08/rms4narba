<?php

namespace Database\Seeders;

use App\Models\BreedingProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreedingProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BreedingProfile::factory(25)->create();
    }
}
