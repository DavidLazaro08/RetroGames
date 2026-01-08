<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $juego['titulo'] }} - RetroGames</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/juegos-detail.css') }}">
</head>
<body>
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
</body>
</html>
