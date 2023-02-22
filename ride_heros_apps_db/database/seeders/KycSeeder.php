<?php

namespace Database\Seeders;

use App\Models\Kyc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KycSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeding the kyc data as a dummy database
        $kyc = [
            'first_name' => 'Driver',
            'last_name' => 'Employee',
            'address' => 'Damak',
            'email' => 'driver@example.com',
            'phone' => '9842125633',
            'dob' => '2002/08/19',
            'image' => '/driver/kyc-img/1675819984download.png',
            'driver_id' => 3,
        ];

        // creating the above dummy vehicle data
        Kyc::create($kyc);
    }
}
