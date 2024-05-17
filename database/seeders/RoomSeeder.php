<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'title' => 'room1',
            'image' => 'room1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo numquam temporibus doloribus possimus incidunt error dolores, facere quam! Corporis officiis facere quisquam consectetur blanditiis quidem provident quibusdam vel, suscipit molestiae',
            'price' => '250',
            'wifi' => 'yes',
            'type' => 'deluxe',

        ]);
        Room::create([
            'title' => 'room2',
            'image' => 'room2.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo numquam temporibus doloribus possimus incidunt error dolores, facere quam! Corporis officiis facere quisquam consectetur blanditiis quidem provident quibusdam vel, suscipit molestiae',
            'price' => '200',
            'wifi' => 'yes',
            'type' => 'Regular',

        ]);
        Room::create([
            'title' => 'room3',
            'image' => 'room3.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo numquam temporibus doloribus possimus incidunt error dolores, facere quam! Corporis officiis facere quisquam consectetur blanditiis quidem provident quibusdam vel, suscipit molestiae',
            'price' => '150',
            'wifi' => 'yes',
            'type' => 'deluxe',

        ]);
        Room::create([
            'title' => 'room4',
            'image' => 'room4.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo numquam temporibus doloribus possimus incidunt error dolores, facere quam! Corporis officiis facere quisquam consectetur blanditiis quidem provident quibusdam vel, suscipit molestiae',
            'price' => '350',
            'wifi' => 'no',
            'type' => 'Regular',

        ]);
        Room::create([
            'title' => 'room5',
            'image' => 'room5.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo numquam temporibus doloribus possimus incidunt error dolores, facere quam! Corporis officiis facere quisquam consectetur blanditiis quidem provident quibusdam vel, suscipit molestiae',
            'price' => '250',
            'wifi' => 'yes',
            'type' => 'deluxe',

        ]);
        Room::create([
            'title' => 'room6',
            'image' => 'room6.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo numquam temporibus doloribus possimus incidunt error dolores, facere quam! Corporis officiis facere quisquam consectetur blanditiis quidem provident quibusdam vel, suscipit molestiae',
            'price' => '450',
            'wifi' => 'n0',
            'type' => 'Regular',

        ]);
    }
}
