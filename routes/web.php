<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

// Bonus Route Parameter
Route::get('/hello/{nama}', function ($nama) {
    return "Halo, selamat datang " . e($nama) . "!";
});