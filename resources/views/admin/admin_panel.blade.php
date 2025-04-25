@extends ('layouts.admin')

@section('content')
    <nav class="pt-4 px-4">
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <li>
                <div class="bg-white rounded-lg shadow p-6 transition hover:shadow-lg duration-300">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Пользователи</h3>
                    <p class="mb-4 text-gray-600">Общее количество пользователей: <span class="font-bold">{{ App\Models\User::count() }}</span></p>
                    <a href="{{ route('admin.users') }}" class="text-indigo-600 hover:underline">Управление пользователями</a>
                </div>
            </li>
            <li>
                <div class="bg-white rounded-lg shadow p-6 transition hover:shadow-lg duration-300">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Заказы</h3>
                    <p class="mb-4 text-gray-600">Общее количество заказов: <span class="font-bold"></span></p>
                    <a href="#" class="text-indigo-600 hover:underline">Просмотр заказов</a>
                </div>
            </li>
            <li>
                <div class="bg-white rounded-lg shadow p-6 transition hover:shadow-lg duration-300">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Фильмы</h3>
                    <p class="mb-4 text-gray-600">Редактирование фильмов.</p>
                    <a href="{{ route('admin.movies.index') }}" class="text-indigo-600 hover:underline" rel="noopener noreferrer">Управление фильмами</a>

                </div>
            </li>
        </ul>
    </nav>
@endsection
