@extends('layouts.app')

@section('content')
<h1 class="p-4">Список фильмов</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" style="padding: 30px">
    @foreach ($movies as $movie)
        <div class="bg-white rounded-lg shadow p-6 transition hover:shadow-lg duration-300">
            <h2 class="text-xl font-semibold mb-2">{{ $movie->title }}</h2>
            <p class="mb-4">{{ Str::limit($movie->description, 100) }}</p>
            <a href="{{ route('movies.edit', $movie->id) }}" class="text-indigo-600 hover:underline">Редактировать</a>
        </div>
    @endforeach
    <div class="flex justify-center items-center mt-8">
        {{ $movies->links('pagination::tailwind') }}
    </div>
</div>
@endsection