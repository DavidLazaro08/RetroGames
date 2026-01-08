<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# RetroGames

Proyecto en Laravel que muestra una lista de videojuegos y el detalle de cada juego usando datos estáticos (simulación de base de datos).

## Tecnologías
- PHP (Laravel)
- Blade (layouts, @yield, @extends, @section)
- Vite (@vite) + CSS

## Rutas
- /juegos -> Lista de videojuegos
- /juegos/{id} -> Detalle del juego

## Cómo ejecutar en local
1. Instalar dependencias:
   - composer install
   - npm install
2. Configurar entorno:
   - cp .env.example .env
   - php artisan key:generate
3. Limpiar config (por si acaso):
   - php artisan config:clear
4. Ejecutar:
   - Con Herd: abrir http://retrogames.test
   - Alternativa: php artisan serve
