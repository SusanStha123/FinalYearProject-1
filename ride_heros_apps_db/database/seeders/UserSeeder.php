<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeding the admin data as a dummy database
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'roles' => 0,
            'status' => 1,
            'password' => bcrypt('admin@123'),
        ];

        // seeding the user data as a dummy database
        $user = [
            'name' => 'User',
            'email' => 'user@example.com',
            'roles' => 1,
            'status' => 1,
            'password' => bcrypt('user@123'),
            'lat-lng' => [
                28.26 => 29.28,
            ]
        ];

        // seeding the driver data as a dummy database
        $driver = [
            'name' => 'Driver',
            'email' => 'driver@example.com',
            'roles' => 2,
            'status' => 0,
            'password' => bcrypt('driver@123'),
        ];

        // creating all the above dummy data
        User::create($admin);
        User::create($user);
        User::create($driver);
    }
}
