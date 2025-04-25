@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center gap-4 bg-white shadow-md rounded-lg overflow-hidden"
        style="width: 600px; margin: 30px auto; padding: 10px 15px;">
        <div style="width: auto; height: auto;">
            <img src="{{ asset('storage/' . $movie->poster) }}" alt="Постер {{ $movie->title }}" class="rounded-lg">
        </div>

        <div>
            <h1 class="text-3xl font-bold text-gray-800">Название: {{ $movie->title }}</h1>
        </div>

        <div class="mt-6">
            <form action="{{ route('movies.buy.submit') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="hall_id" class="block text-gray-700 font-medium mb-2">Выберите зал:</label>
                    <select name="hall_id" id="hall_id" class="border border-gray-300 p-2 w-full rounded-md" style="width: 325px; padding-left: 15px; cursor: pointer;">
                        @foreach ($halls as $hall)
                            <option value="{{ $hall->id }}">{{ $hall->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="schedule_id" class="block text-gray-700 font-medium mb-2">Выберите сеанс:</label>
                    <select name="schedule_id" id="schedule_id" class="border border-gray-300 p-2 rounded-md" style="width: 325px; padding-left: 15px; cursor: pointer;">
                        @foreach ($schedules as $schedule)
                            <option value="{{ $schedule->id }}">
                                {{ $schedule->date }} {{ $schedule->time_from }} - {{ $schedule->time_to }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="seat_id" class="block text-gray-700 font-medium mb-2">Выберите место:</label>
                    <select name="seat_id" id="seat_id" class="border border-gray-300 p-2 w-full rounded-md" style="width: 325px; padding-left: 15px; cursor: pointer;">
                    </select>
                </div>

                <button type="submit"
                    class="bg-indigo-600 text-white px-6 py-2 rounded-md font-medium hover:bg-indigo-700 transition-colors items-center"
                    id="buy-ticket-btn" style="background-color: rgb(79 70 229 / var(--tw-bg-opacity, 1));">
                    Купить билет
                </button>
            </form>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hallSelect = document.getElementById('hall_id');
        const seatSelect = document.getElementById('seat_id');
        const buyTicketBtn = document.getElementById('buy-ticket-btn');

        if (!hallSelect) {
            console.error('Элемент с id="hall_id" не найден.');
            return;
        }

        function loadSeats(hallId) {
            seatSelect.innerHTML = '<option value="" disabled selected>Выберите место...</option>';
            buyTicketBtn.disabled = true;

            fetch(`/api/halls/${hallId}/seats`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(seat => {
                        const option = document.createElement('option');
                        option.value = seat.id;
                        option.textContent = `Ряд ${seat.row}, Место ${seat.place}`;
                        seatSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Ошибка:', error));
        }

        const defaultHallId = hallSelect.value;
        if (defaultHallId) {
            loadSeats(defaultHallId);
        }

        hallSelect.addEventListener('change', function() {
            const hallId = this.value;
            if (hallId) {
                loadSeats(hallId);
            }
        });

        seatSelect.addEventListener('change', () => {
            buyTicketBtn.disabled = false;
        })
    });
</script>

<style>
    #buy-ticket-btn:disabled {
        background-color: #353535 !important;
        color: #fff;
        cursor: not-allowed;
    }
</style>
