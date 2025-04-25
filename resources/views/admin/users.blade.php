@extends ('layouts.admin')

@section('content')
<div class="container mx-auto px-6">
    <h2 class="text-2xl font-semibold mb-5 py-4">Список пользователей</h2>
    <table class="min-w-full bg-white shadow rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Имя</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Номер телефона</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->name }} {{ $user->last_name }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->phone_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
