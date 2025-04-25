<?php

namespace Database\Seeders;

use App\Models\Hall;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $halls = [
            ['name' => 'Зал 1', 'type' => 'regular'],
            ['name' => 'Зал 2', 'type' => 'stereo'],
            ['name' => 'Зал 3', 'type' => 'IMAX'],
            ['name' => 'Зал 4', 'type' => '2D'],
            ['name' => 'Зал 5', 'type' => '3D'],
            ['name' => 'Зал 6', 'type' => '4D'],
        ];

        foreach ($halls as $hall) {
            Hall::create($hall);
        }
    }
}
