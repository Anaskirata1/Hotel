<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallary;
class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallary::create([

            'image' => 'gallery1.jpg',

        ]);
        Gallary::create([

            'image' => 'gallery2.jpg',

        ]);
        Gallary::create([

            'image' => 'gallery3.jpg',

        ]);
        Gallary::create([

            'image' => 'gallery4.jpg',

        ]);
        Gallary::create([

            'image' => 'gallery5.jpg',

        ]);
        Gallary::create([

            'image' => 'gallery6.jpg',

        ]);
        Gallary::create([

            'image' => 'gallery7.jpg',

        ]);
        Gallary::create([

            'image' => 'gallery8.jpg',

        ]);
    }
}
