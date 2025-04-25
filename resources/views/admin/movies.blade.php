@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Редактировать фильм: {{ $movie->title }}</h1>

        <form action="{{ route('movies.update', $movie->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Название</label>
                <input type="text" id="title" name="title" value="{{ old('title', $movie->title) }}"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Описание</label>
                <textarea id="description" name="description"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500">{{ old('description', $movie->description) }}</textarea>
            </div>

            <div>
                <label for="country" class="block text-sm font-medium text-gray-700">Страна</label>
                <input type="text" id="country" name="country"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('country', $movie->country) }}" />
            </div>

            <div>
                <label for="duration" class="block text-sm font-medium text-gray-700">Длительность</label>
                <input type="text" id="duration" name="duration"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('duration', $movie->duration) }}" />
            </div>

            <div>
                <label for="release_date" class="block text-sm font-medium text-gray-700">Дата релиза</label>
                <input type="text" id="release_date" name="release_date"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500" 
                    value="{{ old('release_date', $movie->release_date) }}" />
            </div>

            <div>
                <label for="rating" class="block text-sm font-medium text-gray-700">Рейтинг</label>
                <input type="text" id="rating" name="rating"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('rating', $movie->rating) }}" />
            </div>

            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700">Слуг</label>
                <input type="text" id="slug" name="slug"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('slug', $movie->slug) }}" />
            </div>

            <div>
                <label for="poster" class="block text-sm font-medium text-gray-700">Постер</label>
                <input type="text" id="poster" name="poster"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500" value="{{ old('poster', $movie->poster) }}" />
            </div>

            <button type="submit"
                class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                style="background-color: indigo; color: #fff; margin-top: 30px;">
                Сохранить изменения
            </button>
        </form>
    </div>
@endsection
