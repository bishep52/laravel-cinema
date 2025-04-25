<?php

use App\Http\Controllers\HallController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('movies', MovieController::class); 


Route::get('/', [MovieController::class, 'index'])->name('movies.index');

Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::get('/movies/{id}/buy', [MovieController::class, 'buy'])->name('movies.buy');
Route::post('/movies/buy/submit', [MovieController::class, 'buySubmit'])->name('movies.buy.submit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () { return view('admin.admin_panel'); });
    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/movies', [MovieController::class, 'adminIndex'])->name('admin.movies.index');
});


Route::get('/api/halls/{hall_id}/seats', [HallController::class, 'getSeats'])->name('halls.seats');

require __DIR__.'/auth.php';