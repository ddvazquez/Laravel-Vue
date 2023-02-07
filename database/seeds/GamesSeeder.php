<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'name' => 'The legend of Zelda: Breath of the Wild',
            'description' => 'Olvida todo lo que sabes acerca de los juegos de la serie The Legend of Zelda. Explora y descubre un mundo lleno de aventuras en The Legend of Zelda: Breath of the Wild, una nueva saga que rompe los esquemas de la aclamada serie. Viaja a través de praderas y bosques, y alcanza cimas de montañas mientras descubres cómo cayó en la ruina el reino de Hyrule en esta emocionante aventura al aire libre. Ahora con Nintendo Switch, tu aventura será más libre y extensa que nunca. Lleva tu consola y vive una gran aventura como Link de la manera que más te guste.',
            'platform' => 'Nintendo Switch',
            'image_url' => 'https://media.vandal.net/m/43030/the-legend-of-zelda-breath-of-the-wild-201732131429_1.jpg',
        ]);

        DB::table('games')->insert([
            'name' => 'Super Mario Odyssey',
            'description' => 'Explora increíbles lugares lejos del reino Champiñón al unirte a Mario y su nuevo amigo Cappy en una increíble aventura al mejor estilo trotamundos en 3D. Usa asombrosas habilidades como: el poder de capturar y controlar objetos, animales y enemigos; para conseguir energilunas necesarias para recargar la nave Odyssey y salvar a la princesa Peach de los planes de boda de Bowser.',
            'platform' => 'Nintendo Switch',
            'image_url' => 'https://media.vandal.net/m/43395/super-mario-odyssey-2017102611035_25.jpg',
        ]);

        DB::table('games')->insert([
            'name' => 'Pokémon espada',
            'description' => 'Prepárate para descubrir Galar, una extensa región con lugares de lo más variado: desde apacibles campos hasta modernas ciudades, pasando por un frondoso bosque y montañas nevadas. Los habitantes y Pokémon colaboran estrechamente para impulsar las industrias de la región.',
            'platform' => 'Nintendo Switch',
            'image_url' => 'https://media.vandal.net/m/61486/pokemon-espada-y-escudo-201972612334165_18.jpg',
        ]);

        DB::table('games')->insert([
            'name' => 'Mario + Rabbids: Sparks of Hope',
            'description' => 'Únete a Mario, Luigi, la princesa Peach, Rabbid Peach, Rabbid Luigi y sus amigos, y embárcate en un viaje galáctico para derrotar a una entidad malévola y salvar a tus compañeros Spark. ¡Explora planetas y viaja por la galaxia descubriendo misteriosos secretos y completando emocionantes misiones!',
            'platform' => 'Nintendo Switch',
            'image_url' => 'https://media.vandal.net/m/102188/mario-rabbids-sparks-of-hope-20216139202015_1.jpg',
        ]);

        DB::table('games')->insert([
            'name' => 'The legend of Zelda: Links Awakening',
            'description' => 'Ayuda a Link a escapar de una tierra extraña en The Legend of Zelda: Links Awakening para Nintendo Switch. Entabla amistad con un elenco de personajes de lo más variopinto, combate montones de monstruos y explora peligrosas mazmorras en esta aventura clásica con un nuevo estilo artístico.',
            'platform' => 'Nintendo Switch',
            'image_url' => 'https://media.vandal.net/m/70568/the-legend-of-zelda-links-awakening-2019612813232_1.jpg',
        ]);
    }
}
