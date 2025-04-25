<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema | Админ-панель</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
        </style>
    @endif
</head>

<body class="bg-gray-100" style="display: flex; flex-direction: column; min-height: 100vh;">
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4">
            <div class="wrapper" style="display: flex; justify-content: space-between">
                <a href="/" class="text-3xl font-bold text-gray-800">Cinema | Admin</a>
                <nav>
                    <ul>
                        <li>
                            <a href="{{ route('movies.index') }}" class="text-indigo-600 hover:text-indigo-800">
                                Список фильмов
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main style="flex-grow: 1;">
        @yield('content')
    </main>
    <footer class="bg-white shadow mt-8">
        <div class="container mx-auto text-center py-4">
            <p class="text-gray-600 text-sm">&copy; {{ date('Y') }} Cinema. Все права защищены.</p>
        </div>
    </footer>
</body>

</html>
