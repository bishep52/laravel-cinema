<?php

namespace App\Services;

use App\Interfaces\MovieServiceInterface;
use App\Interfaces\ServiceInterface;
use App\Models\Movie;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class MovieService implements ServiceInterface, MovieServiceInterface
{
    /**
     * 
     *
     * @param int
     * @param int
     * @return LengthAwarePaginator
     */
    public function getList(int $page = 1, int $perPage = 10): LengthAwarePaginator
    {
        return Movie::orderBy('release_date', 'desc')->paginate($perPage, ['*'], 'page', $page);
    }

    public function getById(int $id)
    {
        return Movie::findOrFail($id);
    }

    public function create(array $data, array $genreIds)
    {
        $slug = Str::slug($data['title']);

        $movie = Movie::query()->create([
            'title' => $slug,
            'slug' => $data['slug'],
            'description' => $data['description'],
            'duration' => $data['duration'],
            'country' => $data['country'],
            'release_date' => $data['release_date'],
            'rating' => $data['rating'],
            'poster' => $data['poster'],
        ]);

        $movie->genres()->attach($genreIds);

        return $movie;
    }

    public function update(Movie $movie, array $data, array $genreIds)
    {
        $movie->update($data);

        $movie->genres()->sync($genreIds);
    }

    public function delete(int $id)
    {
        $movie = Movie::findOrFail($id);

        $movie->delete();
    }
}
