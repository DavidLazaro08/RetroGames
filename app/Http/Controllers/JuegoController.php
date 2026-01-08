<?php

namespace App\Http\Controllers;

class JuegoController extends Controller
{
    public function index()
    {
        $juegos = include app_path('Data/juegos.php');

        return view('juegos.index', compact('juegos'));
    }
}
