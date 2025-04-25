@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center gap-4 bg-white shadow-md rounded-lg overflow-hidden"
        style="width: 600px; margin: 30px auto; padding: 10px 15px;">
        <div style="width: auto; height: auto;">
            <img src="{{ asset('storage/' . $movie->poster) }}" alt="Постер {{ $movie->title }}" class="rounded-lg">
        </div>
        
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Название: {{ $movie->title }}</h1>
            <p class="text-gray-600 mt-2"><strong>Описание:</strong> {{ $movie->description }}</p>
            <p class="text-gray-600 mt-2"><strong>Страна:</strong> {{ $movie->country }}</p>
            <p class="text-gray-600 mt-2"><strong>Длительность:</strong> {{ $movie->duration }}</p>
            <p class="text-gray-600 mt-2"><strong>Дата релиза:</strong> {{ $movie->release_date }}</p>
        </div>

        <div class="flex gap-4 mt-6">
            <a href="{{ route('movies.buy', $movie->id) }}" class="text-green-600 hover:text-green-800 ml-4">Купить билет</a>
            <a href="{{ route('movies.index') }}" class="text-indigo-600 hover:text-indigo-800">Назад к списку фильмов</a>
        </div>
    </div>
@endsection
