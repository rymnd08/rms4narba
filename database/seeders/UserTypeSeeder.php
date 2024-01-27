<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // UserType::factory(4)->create();
        $data = [
            ['user_type' => 'SuperAdmin', 'created_at' => now(), 'updated_at' => now()],
            ['user_type' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['user_type' => 'User', 'created_at' => now(), 'updated_at' => now()],
            ['user_type' => 'Staff', 'created_at' => now(), 'updated_at' => now()],
        ];

        UserType::insert($data);
    }
}
