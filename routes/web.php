<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReviewController;

// Главная страница
Route::get('/', function () {
    return view('home');
});

// Другие страницы
Route::get('/about', function () {
    return view('about');
});
Route::get('/review', [ReviewController::class, 'review']);
Route::post('/review/check', [ReviewController::class, 'review_check']);

// Встроенные маршруты для аутентификации
Auth::routes();

// Домашняя страница после входа
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
