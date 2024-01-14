<?php

namespace Database\Seeders;

use App\Models\RabbitProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RabbitProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RabbitProfile::factory(10)->create();
    }
}
