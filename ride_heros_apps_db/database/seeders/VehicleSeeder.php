<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeding the vehicle data as a dummy database
        $vehicle = [
            'name' => 'Pulsar',
            'brand' => 'Bajaj',
            'category' => 'Bike',
            'description' => 'This is a pulsar bike',
            'image' => '/driver/vehicle-img/1675826050PulsarNS.png',
            'driver_id' => 3,
        ];

        // creating the above dummy vehicle data
        Vehicle::create($vehicle);
    }
}
