<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - RetroGames</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if(Route::is('juegos.show'))
        @vite(['resources/css/juegos-detail.css'])
    @endif
</head>
<body>

    <header class="site-header">
        <div class="container">
            <h1 class="logo">🎮 RetroGames</h1>

            <nav class="nav">
                <a href="/juegos">Lista</a>
            </nav>
        </div>
    </header>

    <main class="container content">
        @yield('contenido')
    </main>

    <footer class="site-footer">
        <div class="container">
            <small>RetroGames · Laravel + Blade</small>
        </div>
    </footer>

</body>
</html>
