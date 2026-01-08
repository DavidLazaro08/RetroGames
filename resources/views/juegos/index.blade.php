@extends('layouts.app')

@section('titulo')
Lista de videojuegos
@endsection

@section('contenido')

    <div class="card">
        <h2>Lista de videojuegos</h2>

        <ul class="game-list">
            @foreach ($juegos as $juego)
                <li class="game-item">
                    <div class="game-title">
                        <a href="/juegos/{{ $juego['id'] }}">
                            {{ $juego['titulo'] }}
                        </a>
                    </div>

                    <div class="game-meta">
                        {{ $juego['plataforma'] }} · {{ $juego['anio'] }}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>


@endsection
