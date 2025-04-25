@extends('layouts.app')

@section('content')
<div class="flex flex-col gap-5 px-6 pt-6">
    <div>
        @auth
            @if ($movies->isEmpty())
                <p class="text-gray-500 text-center text-lg font-semibold">Нет доступных фильмов.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($movies as $movie)
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-xl">
                            <div class="p-6">
                                <h2 class="text-xl font-semibold text-gray-800 mb-2">Название: {{ $movie->title }}</h2>
                                <p class="text-gray-600 text-sm line-clamp-3">{{ $movie->description }}</p>
                                <div class="mt-4">
                                    <a href="{{ route('movies.show', $movie->id) }}"
                                       class="text-indigo-600 hover:text-indigo-800 font-medium">Посмотреть детали</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @else
            <div class="text-center py-12">
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Доступ ограничен</h2>
                <p class="text-gray-600 mb-6">Чтобы просмотреть список фильмов, пожалуйста, авторизуйтесь.</p>
                <a href="{{ route('login') }}" class="text-white px-6 py-2 rounded-md font-medium hover:bg-indigo-700 transition-colors" style="background-color: rgb(99 102 241 / var(--tw-bg-opacity, 1))">
                    Войти
                </a>
            </div>
        @endauth
    </div>

    @auth
        <div class="flex justify-center items-center mt-8">
            {{ $movies->links('pagination::tailwind') }}
        </div>
    @endauth
</div>
@endsection