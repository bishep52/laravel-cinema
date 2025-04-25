<?php

namespace Database\Seeders;

use App\Models\HallSeat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HallSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $halls = \App\Models\Hall::all();
        $seats = \App\Models\Seat::all();

        foreach ($halls as $hall) {
            foreach ($seats as $seat) {
                HallSeat::create([
                    'hall_id' => $hall->id,
                    'seat_id' => $seat->id,
                ]);
            }
        }
    }
}
