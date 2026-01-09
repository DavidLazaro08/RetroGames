@extends('layouts.app')

@section('titulo')
    {{ $juego['titulo'] }}
@endsection

@section('contenido')
    <div class="card game-detail">
        <h1>{{ $juego['titulo'] }}</h1>
        <div class="subtitle">
            {{ $juego['plataforma'] }} &middot; {{ $juego['anio'] }} &middot; {{ $juego['genero'] }}
        </div>

        <div class="description">
            {{ $juego['descripcion'] }}
        </div>

        <div>
            <a href="{{ route('juegos.index') }}" class="btn-back">
                &larr; Volver a la lista
            </a>
        </div>
    </div>
@endsection
