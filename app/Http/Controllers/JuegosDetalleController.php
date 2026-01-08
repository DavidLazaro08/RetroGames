<?php

namespace App\Http\Controllers;

class JuegosDetalleController extends Controller
{
    public function index()
    {
        // Cargar el array de juegos
        $juegos = require app_path('Data/juegos.php');
        
        return view('juegos.index', compact('juegos'));
    }


    public function show($id)
    {
        // Cargar el array de juegos desde el archivo Data
        $juegos = require app_path('Data/juegos.php');
        
        // Buscar el juego por ID
        $juego = collect($juegos)->firstWhere('id', (int)$id);
        
        // Si no se encuentra el juego, mostrar error 404
        if (!$juego) {
            abort(404, 'Juego no encontrado');
        }
        
        // Devuelve la vista con el juego encontrado
        return view('juegos.show', compact('juego'));
    }
}
