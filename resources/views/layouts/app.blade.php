<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    @vite(['resources/css/app.css'])
</head>
<body>

    <header>
        <h1>RetroGames</h1>
        <nav>
            <a href="/juegos">Lista de juegos</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('contenido')
    </main>

    <hr>
    <footer>
        <small>RetroGames - Laravel</small>
    </footer>

</body>
</html>
