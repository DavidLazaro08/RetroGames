<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegosController;

use App\Http\Controllers\JuegoController;
Route::get('/juegos', [JuegoController::class, 'index'])->name('juegos.index');

Route::get('/', function () {
    return view('welcome');
});

// Ruta para el detalle de un juego
Route::get('/juegos/{id}', [JuegosController::class, 'show'])->name('juegos.show');
