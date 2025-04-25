<?php


namespace App\Services;
use App\Models\Movie;

interface MovieInterface {
    public function create(array $data, array $genres);
    public function update(Movie $movie, array $genreIds);
    public function delete(Movie $movie);
    public function getById();

}