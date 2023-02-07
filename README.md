## Utopig Games

Hola! Me presento, mi nombre es PIGGY y soy la CEO de Utopig Studio, ¿cómo estás? ¡Es un placer conocerte!

Te voy a confesar una cosa: yo de todo esto de programación no tengo ni pajolera idea, yo a lo que me dedico es a hacer feliz a mi equipo. Es por eso que te voy a proponer un reto a ver si me puedes ayudar.

A la mayoría del equipo le gustan los videojuegos (yo no sé qué le ven a eso de sentarse en una silla y darle a botones, pero bueno...) y me gustaría que puedan compartir los juegos que tiene cada uno. Pedí ayuda a Maria, Antonio, Nuria, Llorenç y Willi para desarrollar esta herramienta. En su momento me la dieron pero se quedaron a medias :( y ahora siempre me dicen lo mismo, que tienen mucho trabajo y que no tienen tiempo :( Tú seguro que me puedes ayudar, ¿a que sí? :D

## Objetivos

Los objetivos son los siguientes:

- Listar los videjuegos de la tabla 'games' en la página principal con su imagen, título y los primeros 100 caracteres de la descripción.
- Apretando el botón view, cargar los detalles del juego en la misma página, sin refrescar. Puedes usar la maquetación que hay en la página de detalles, en el blade game-detail.blade.php.
- En la página de detalles verás que hay información que aún no existe en la base de datos. Añade los campos con una migración nueva que además rellene los campos de juegos existentes con datos aleatorios.
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
