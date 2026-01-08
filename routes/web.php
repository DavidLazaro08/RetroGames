<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegosController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para el detalle de un juego
Route::get('/juegos/{id}', [JuegosController::class, 'show'])->name('juegos.show');
