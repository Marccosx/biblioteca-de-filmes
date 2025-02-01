<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard')->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::resource('/movie',MovieController::class);
    Route::delete('/movie/{movie}', [MovieController::class, 'destroy'])->name('movie.destroy');
    Route::get('/search', [MovieController::class, 'search'])->name('movie.search');
});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]);


