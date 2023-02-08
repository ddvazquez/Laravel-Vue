## Games

A la mayoría del equipo le gustan los videojuegos y me gustaría que puedan compartir los juegos que tiene cada uno. Pedí ayuda a cada persona del equipo para desarrollar esta herramienta. En su momento me la dieron pero se quedaron a medias.

## Objetivos

Los objetivos son los siguientes:

- Listar los videjuegos de la tabla 'games' en la página principal con su imagen, título y los primeros 100 caracteres de la descripción.
- Apretando el botón view, cargar los detalles del juego en la misma página, sin refrescar. Puedes usar la maquetación que hay en la página de detalles, en el blade game-detail.blade.php.
- En la página de detalles verás que hay información que aún no existe en la base de datos. Añade los campos con una migración nueva, que además rellene los campos nuevos de los juegos existentes con datos aleatorios.
- En la página de detalle, al hacer click en el botón back, debemos volver al listado.
- Al eliminar un juego se debe actualizar el listado de juegos sin tener que refrescar la página.

## Normas del reto

- No dediques más de 2 horas para superar este reto, llega hasta donde te dé este tiempo.
- Clona el repo, trabaja en tu local, súbelo a tu github o gitlab personal y haznos llegar la url.
- El Front lo debes desarrollar con el framework Vue.JS (v2.x o v3.x)

## Requisitos

- PHP 7.2 o superior

## Instrucciones de instalación

Es un Laravel 6 normal y corriente, pero por si acaso:

- Clona el repo en tu pc.
- Crea una base de datos para el proyecto.
- Crea el archivo .env en la raíz del proyecto y rellena los datos de tu base de datos para poder ejecutar las migraciones.
- Ejecuta los siguientes comandos en la raíz del proyecto:
    - composer install
    - php artisan key:generate
    - php artisan migrate --seed
    - npm install
    - npm run dev
    - php artisan serve (o usa tu servidor web preferido)
