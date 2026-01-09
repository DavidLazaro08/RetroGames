<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegosDetalleController extends Controller
{
    public function index()
    {
        $juegos = include app_path('Data/juegos.php');
        return view('juegos.index', compact('juegos'));
    }

    public function show($id)
    {
        $juegos = include app_path('Data/juegos.php');
        
        // Buscar el juego por ID en el array
        $juego = collect($juegos)->firstWhere('id', (int) $id);

        if (!$juego) {
            abort(404);
        }

        return view('juegos.show', compact('juego'));
    }
}
