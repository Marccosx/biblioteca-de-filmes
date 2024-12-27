<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('movielist.index');
})->name('home');

Route::get('/movie', function () {
    return view('movielist.show');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
