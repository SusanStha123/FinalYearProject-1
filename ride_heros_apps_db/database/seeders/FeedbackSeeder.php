<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedback1 = [
            'name' => 'Susan Shrestha',
            'email' => 'shresthasusan144@gmail.com',
            'post' => 'IT Student',
            'profile' => '/driver/profile-img/1676133930278563450_683751729545751_8050433372014569223_n.jpg',
            'message' => "I absolutely love this ride sharing app! It's so easy to use and I've never had any issues getting a ride when I need one. Highly recommended!",
        ];

        $feedback2 = [
            'name' => 'Suman Bhandari',
            'email' => 'sumanbhandari423@gmail.com',
            'post' => 'IT Student',
            'profile' => '/driver/profile-img/167616257314.jpg',
            'message' => "I was hesitant to try this ride sharing app at first, but I'm so glad I did. The app is very user-friendly and the drivers are always on time.",
        ];

        $feedback3 = [
            'name' => 'Nishan Nepal',
            'email' => 'nishannepal777@gmail.com',
            'post' => 'IT Student',
            'profile' => '/driver/profile-img/1676163769images (17).jfif',
            'message' => "I've been using this ride sharing app for a few months now and it's become my go-to for getting around town. The app is always reliable and the drivers are great.",
        ];

        Feedback::create($feedback1);
        Feedback::create($feedback2);
        Feedback::create($feedback3);
    }
}
