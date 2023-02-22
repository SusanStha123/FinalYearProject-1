<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // User Seeder
        $this->call(UserSeeder::class);
        // Feedback Seeder
        $this->call(FeedbackSeeder::class);
        // Kyc Seeder
        $this->call(KycSeeder::class);
        // Vehicle Seeder
        $this->call(VehicleSeeder::class);
    }
}
