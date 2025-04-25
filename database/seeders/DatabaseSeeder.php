<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
use App\Models\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Genre::factory(10)->create();

        $this->call([
            HallSeeder::class,
            SeatSeeder::class,
            HallSeatSeeder::class,
            ScheduleSeeder::class,
            MovieSeeder::class,
        ]);
    }
}
