<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JuegoController;
Route::get('/juegos', [JuegoController::class, 'index'])->name('juegos.index');

Route::get('/', function () {
    return view('welcome');
});
