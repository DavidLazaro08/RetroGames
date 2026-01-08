@extends('layouts.app')

@section('titulo')
Lista de videojuegos
@endsection

@section('contenido')

    <h2>Lista de videojuegos</h2>

    <ul>
        @foreach ($juegos as $juego)
            <li>
                <strong>
                    <a href="/juegos/{{ $juego['id'] }}">
                        {{ $juego['titulo'] }}
                    </a>
                </strong>
                ({{ $juego['plataforma'] }} - {{ $juego['anio'] }})

            </li>
        @endforeach
    </ul>

@endsection
