<?php

namespace App\Http\Controllers;

use App\Services\MovieService;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    protected $movieService;

    public function __construct(MovieService $movieService)
    {
        $this->movieService = $movieService;
    }

    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $movies = $this->movieService->getList($page);

        return view('movie.movie_list', compact('movies'));
    }

    public function show($id)
    {
        $movie = $this->movieService->getById($id);

        return view('movie.show', compact('movie'));
    }

    public function edit($id)
    {
        $movie = $this->movieService->getById($id);

        if (!$movie) {
            return redirect()->route('movies.index')->with('error', 'Фильм не найден.');
        }

        return view('admin.movies', compact('movie'));
    }

    public function update(Request $request, $id)
    {
        $movie = $this->movieService->getById($id);

        if (!$movie) {
            return redirect()->route('movies.index')->with('error', 'Фильм не найден.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'string|max:255',
            'description' => 'required|string',
            'country' => 'required|string',
            'duration' => 'required|string',
            'release_date' => 'required|string',
            'rating' => 'required|string',
            'poster' => 'string',
        ]);

        $data = [
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'country' => $request->input('country'),
            'duration' => $request->input('duration'),
            'release_date' => $request->input('release_date'),
            'rating' => $request->input('rating'),
            'poster' => $request->input('poster'),

        ];

        $this->movieService->update($movie, $data, []);
        return redirect()->route('movies.index')->with('success', 'Фильм успешно обновлен.');
    }


    public function adminIndex(Request $request)
    {
        $page = $request->input('page', 1);
        $movies = $this->movieService->getList($page);

        if ($movies->isEmpty() && $page > 1) {
            return redirect()->route('movies.index', ['page' => 1]);
        }

        return view('admin.movies_index', ['movies' => $movies]);
    }
}
