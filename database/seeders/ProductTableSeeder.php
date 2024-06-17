<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            [
                'id' => 1,
                'nombreProducto' => 'Mask Off',
                'tipoProducto' => 'Canción',
                'precio' => 4.99,
                'artista' => 'Future',
                'album' => 'Future',
                'cancion_idCancion' => 1,
                'created_at' => Carbon::parse('2024-06-15 21:56:49'),
                'updated_at' => Carbon::parse('2024-06-15 21:56:49'),
            ],
            [
                'id' => 2,
                'nombreProducto' => 'Till\' I Colapse',
                'tipoProducto' => 'Canción',
                'precio' => 4.99,
                'artista' => 'Eminem',
                'album' => 'The Eminem Show',
                'cancion_idCancion' => 2,
                'created_at' => Carbon::parse('2024-06-15 22:02:36'),
                'updated_at' => Carbon::parse('2024-06-15 22:02:36'),
            ],
            [
                'id' => 3,
                'nombreProducto' => 'Venom',
                'tipoProducto' => 'Canción',
                'precio' => 4.99,
                'artista' => 'Eminem',
                'album' => 'Venom',
                'cancion_idCancion' => 3,
                'created_at' => Carbon::parse('2024-06-15 22:03:20'),
                'updated_at' => Carbon::parse('2024-06-15 22:03:20'),
            ],
            [
                'id' => 4,
                'nombreProducto' => 'Bécane',
                'tipoProducto' => 'Canción',
                'precio' => 4.99,
                'artista' => 'Yamê',
                'album' => 'Bécane',
                'cancion_idCancion' => 4,
                'created_at' => Carbon::parse('2024-06-15 22:04:17'),
                'updated_at' => Carbon::parse('2024-06-15 22:04:17'),
            ],
            [
                'id' => 5,
                'nombreProducto' => 'Dance Monkey',
                'tipoProducto' => 'Canción',
                'precio' => 4.99,
                'artista' => 'Tones and I',
                'album' => 'The Kids Are Coming',
                'cancion_idCancion' => 5,
                'created_at' => Carbon::parse('2024-06-15 22:04:36'),
                'updated_at' => Carbon::parse('2024-06-15 22:04:36'),
            ],
            [
                'id' => 6,
                'nombreProducto' => 'Radioactive',
                'tipoProducto' => 'Canción',
                'precio' => 4.99,
                'artista' => 'Imagine Dragons',
                'album' => 'Night Visions',
                'cancion_idCancion' => 6,
                'created_at' => Carbon::parse('2024-06-15 22:04:54'),
                'updated_at' => Carbon::parse('2024-06-15 22:04:54'),
            ],
            [
                'id' => 7,
                'nombreProducto' => 'In the end',
                'tipoProducto' => 'Canción',
                'precio' => 4.99,
                'artista' => 'Linkin Park',
                'album' => 'In The End',
                'cancion_idCancion' => 7,
                'created_at' => Carbon::parse('2024-06-15 22:06:26'),
                'updated_at' => Carbon::parse('2024-06-15 22:06:26'),
            ],
            [
                'id' => 8,
                'nombreProducto' => 'I Know What You Want',
                'tipoProducto' => 'Canción',
                'precio' => 4.99,
                'artista' => 'Busta Rhymes',
                'album' => 'I Know What You Want',
                'cancion_idCancion' => 8,
                'created_at' => Carbon::parse('2024-06-15 22:06:57'),
                'updated_at' => Carbon::parse('2024-06-15 22:06:57'),
            ],
            [
                'id' => 9,
                'nombreProducto' => 'Butterfly Effect',
                'tipoProducto' => 'Canción',
                'precio' => 4.99,
                'artista' => 'Travis Scott',
                'album' => 'Astroworld',
                'cancion_idCancion' => 9,
                'created_at' => Carbon::parse('2024-06-15 22:07:35'),
                'updated_at' => Carbon::parse('2024-06-15 22:07:35'),
            ],
            [
                'id' => 10,
                'nombreProducto' => 'The Next Episode',
                'tipoProducto' => 'Canción',
                'precio' => 4.99,
                'artista' => 'Dr. Dre & Snoop Dogg',
                'album' => 'The Next Episode',
                'cancion_idCancion' => 10,
                'created_at' => Carbon::parse('2024-06-15 22:07:55'),
                'updated_at' => Carbon::parse('2024-06-15 22:07:55'),
            ],
        ]);
    }
}
