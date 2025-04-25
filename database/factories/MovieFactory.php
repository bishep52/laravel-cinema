<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => Str::random(3),
            'slug' => Str::random(4),
            'description' => Str::random(10),
            'country' => Str::random(5),
            'duration' => $this->faker->numberBetween(30, 240),
            'release_date' => $this->faker->date(),
            'rating' => $this->faker->numberBetween(1, 10),
            'poster' => $this->faker->imageUrl(),
        ];
    }
}
