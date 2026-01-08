<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegosDetalleController;


Route::get('/juegos', [JuegosDetalleController::class, 'index'])->name('juegos.index');

Route::get('/', function () {
    return view('welcome');
});

// Ruta para el detalle de un juego
Route::get('/juegos/{id}', [JuegosDetalleController::class, 'show'])->name('juegos.show');
