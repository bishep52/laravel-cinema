<?php

namespace App\Interfaces;

use App\Models\Movie;

interface MovieServiceInterface
{
    public function create(array $data, array $genreIds);
    public function update(Movie $movie, array $data, array $genreIds);
    public function delete(int $id);
}
