<?php

namespace Database\Seeders;

use App\Models\MovieSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $movies = \App\Models\Movie::all();
        $halls = \App\Models\Hall::all();

        foreach ($movies as $movie) {
            foreach ($halls as $hall) {
                for ($day = 1; $day <= 7; $day++) {
                    $date = now()->addDays($day)->format('Y-m-d');

                    DB::table('schedules')->insert([
                        'movie_id' => $movie->id,
                        'hall_id' => $hall->id,
                        'date' => $date,
                        'time_from' => '10:00:00',
                        'time_to' => '12:00:00',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

                    DB::table('schedules')->insert([
                        'movie_id' => $movie->id,
                        'hall_id' => $hall->id,
                        'date' => $date,
                        'time_from' => '14:00:00',
                        'time_to' => '16:00:00',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
