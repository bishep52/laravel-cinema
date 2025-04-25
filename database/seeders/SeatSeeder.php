<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($row = 1; $row <= 10; $row++) {
            for ($place = 1; $place <= 10; $place++) {
                Seat::create([
                    'place' => $place,
                    'row' => $row,
                    'price' => rand(300, 1000),
                ]);
            }
        }
    }
}
