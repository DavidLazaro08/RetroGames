<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# RetroGames 🎮

Proyecto desarrollado en *Laravel* que muestra una *lista de videojuegos retro* y la *ficha de detalle de cada uno*, utilizando **datos estáticos en el controlador** (sin base de datos real).

Trabajo realizado en pareja, usando *Git y GitHub con ramas*.

---

## 🧩 Tecnologías utilizadas

- PHP 8.x
- Laravel
- Blade (herencia de plantillas con @extends, @yield, @section)
- Vite (build ya generado y subido)
- Git / GitHub

---

## 📁 Estructura del proyecto

- `/juegos` → listado de videojuegos  
- `/juegos/{id}` → ficha de detalle del videojuego  
- Plantilla base en `resources/views/layouts/app.blade.php`
- Vistas Blade para lista y detalle
- Datos simulados en archivo PHP (sin BD real)

---

## 🚀 Ejecución del proyecto en local

### 1️⃣ Descargar el repositorio
```bash
git clone https://github.com/DavidLazaro08/RetroGames.git
cd RetroGames
```

### 2️⃣ Instalar dependencias PHP
```bash
composer install
```

### 3️⃣ Configurar entorno
```bash
copy .env.example .env
php artisan key:generate
php artisan optimize:clear
```
⚠️ **No es necesario configurar base de datos.**  
El proyecto usa SQLite solo como requisito interno de Laravel (archivo vacío incluido).

---

## ▶️ Cómo ejecutar el proyecto

### ✅ Opción A: Usando Laravel Herd (recomendado si está instalado)
Abrir directamente en el navegador:

http://retrogames.test/juegos

En caso de usar Herd, el dominio `retrogames.test` se detecta automáticamente.

### ✅ Opción B: Sin Herd (PHP nativo)
Si `php artisan serve` falla por puertos ocupados:

```bash
php -S 127.0.0.1:8888 -t public
```

Abrir en el navegador:

http://127.0.0.1:8888/juegos

---

## 🎨 Sobre los estilos (Vite)
El proyecto ya incluye el build de Vite subido (`public/build`), por lo que:

❌ **NO** es necesario ejecutar `npm install`

❌ **NO** es necesario ejecutar `npm run build`

(Solo sería necesario si se modifican los estilos)

---

## 📌 Notas finales
- La ruta raíz `/` redirige automáticamente a `/juegos`
- El proyecto no depende de base de datos real
- Está preparado para funcionar tanto con Herd como sin él
- Pensado para que el profesor pueda clonar y ejecutar con los mínimos pasos posibles

---

## 👥 Autores
- David Gutiérrez Ortiz
- Jacobo Domínguez Morales
