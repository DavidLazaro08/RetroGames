@extends('layouts.app')

@section('titulo')
{{ $juego['titulo'] }} - RetroGames
@endsection

@section('contenido')
    <div class="container">
        <a href="/juegos" class="back-button">Volver a la lista</a>

        <div class="game-detail-card">
            <div class="game-header">
                <h1 class="game-title">{{ $juego['titulo'] }}</h1>
                <span class="game-platform">{{ $juego['plataforma'] }}</span>
            </div>

            <div class="game-content">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">📅 Año de lanzamiento</div>
                        <div class="info-value">{{ $juego['anio'] }}</div>
                    </div>

                    <div class="info-item">
                        <div class="info-label">🎯 Género</div>
                        <div class="info-value">{{ $juego['genero'] }}</div>
                    </div>

                    <div class="info-item">
                        <div class="info-label">🕹️ Plataforma</div>
                        <div class="info-value">{{ $juego['plataforma'] }}</div>
                    </div>
                </div>

                <div class="description-section">
                    <h2 class="description-title">📖 Descripción</h2>
                    <p class="description-text">{{ $juego['descripcion'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

