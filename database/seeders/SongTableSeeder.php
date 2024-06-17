<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('song')->insert([
            [
                'id' => 1,
                'titulo' => 'Mask off',
                'artista' => 'Future',
                'album' => 'Future',
                'duracion' => 204,
                'imagen_album' => 'media/image_albums/Future_cover.jpg',
                'archivo_mp3' => 'media/songs/Future-Mask_Off.mp3',
                'created_at' => Carbon::parse('2024-06-15 19:29:36'),
                'updated_at' => Carbon::parse('2024-06-15 19:29:36'),
            ],
            [
                'id' => 2,
                'titulo' => 'Till\' I Colapse',
                'artista' => 'Eminem',
                'album' => 'The Eminem Show',
                'duracion' => 297,
                'imagen_album' => 'media/image_albums/Eminem_Show_cover.jpg',
                'archivo_mp3' => 'media/songs/Eminem-Till_I_Collapse.mp3',
                'created_at' => Carbon::parse('2024-06-15 20:04:50'),
                'updated_at' => Carbon::parse('2024-06-15 20:04:50'),
            ],
            [
                'id' => 3,
                'titulo' => 'Venom',
                'artista' => 'Eminem',
                'album' => 'Venom',
                'duracion' => 271,
                'imagen_album' => 'media/image_albums/eminem-venom-cover.jpg',
                'archivo_mp3' => 'media/songs/Eminem-Venom.mp3',
                'created_at' => Carbon::parse('2024-06-15 20:12:06'),
                'updated_at' => Carbon::parse('2024-06-15 20:12:06'),
            ],
            [
                'id' => 4,
                'titulo' => 'Bécane',
                'artista' => 'Yamê',
                'album' => 'Bécane',
                'duracion' => 182,
                'imagen_album' => 'media/image_albums/yame-becane-cover.jpg',
                'archivo_mp3' => 'media/songs/Yame-Becane.mp3',
                'created_at' => Carbon::parse('2024-06-15 20:17:31'),
                'updated_at' => Carbon::parse('2024-06-15 20:17:31'),
            ],
            [
                'id' => 5,
                'titulo' => 'Dance Monkey',
                'artista' => 'Tones and I',
                'album' => 'The Kids Are Coming',
                'duracion' => 209,
                'imagen_album' => 'media/image_albums/tones-and-i-album.jpg',
                'archivo_mp3' => 'media/songs/Tones_and_i-Dance_monkey.mp3',
                'created_at' => Carbon::parse('2024-06-15 20:24:27'),
                'updated_at' => Carbon::parse('2024-06-15 20:24:27'),
            ],
            [
                'id' => 6,
                'titulo' => 'Radioactive',
                'artista' => 'Imagine Dragons',
                'album' => 'Night Visions',
                'duracion' => 185,
                'imagen_album' => 'media/image_albums/night-visions-cover.jpg',
                'archivo_mp3' => 'media/songs/Imagine_dragons-Radioactive.mp3',
                'created_at' => Carbon::parse('2024-06-15 20:27:46'),
                'updated_at' => Carbon::parse('2024-06-15 20:27:46'),
            ],
            [
                'id' => 7,
                'titulo' => 'In the end',
                'artista' => 'Linkin Park',
                'album' => 'In The End',
                'duracion' => 185,
                'imagen_album' => 'media/image_albums/LinkinParkIntheEnd.jpg',
                'archivo_mp3' => 'media/songs/Linkin_Park-In_the_end.mp3',
                'created_at' => Carbon::parse('2024-06-15 20:31:16'),
                'updated_at' => Carbon::parse('2024-06-15 20:31:16'),
            ],
            [
                'id' => 8,
                'titulo' => 'I Know What You Want',
                'artista' => 'Busta Rhymes',
                'album' => 'I Know What You Want',
                'duracion' => 325,
                'imagen_album' => 'media/image_albums/busta-rhymes-cover.jpg',
                'archivo_mp3' => 'media/songs/Busta_Rhymes-I_know_what_you_want.mp3',
                'created_at' => Carbon::parse('2024-06-15 20:36:34'),
                'updated_at' => Carbon::parse('2024-06-15 20:36:34'),
            ],
            [
                'id' => 9,
                'titulo' => 'Butterfly Effect',
                'artista' => 'Travis Scott',
                'album' => 'Astroworld',
                'duracion' => 190,
                'imagen_album' => 'media/image_albums/Travis-scott-astroworld-cover.jpg',
                'archivo_mp3' => 'media/songs/Travis_Scott-Butterfly_Effect.mp3',
                'created_at' => Carbon::parse('2024-06-15 20:44:57'),
                'updated_at' => Carbon::parse('2024-06-15 20:44:57'),
            ],
            [
                'id' => 10,
                'titulo' => 'The Next Episode',
                'artista' => 'Dr. Dre & Snoop Dogg',
                'album' => 'The Next Episode',
                'duracion' => 197,
                'imagen_album' => 'media/image_albums/Dre_-_Next_Episode.jpg',
                'archivo_mp3' => 'media/songs/Dr_dre_ft_Snoop_dogg-The_next_episode.mp3',
                'created_at' => Carbon::parse('2024-06-15 20:48:14'),
                'updated_at' => Carbon::parse('2024-06-15 20:48:14'),
            ],
        ]);
    }
}
