<?php

namespace Database\Seeders;

use App\Models\Videogame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $videogames = [
            [
                'name' => 'Hollow Knight',
                'release_year' => '2017-02-24',
                'language' => 'Multilingual',
                'description' => 'Metroidvania sviluppato da Team Cherry, celebre per la difficoltà e l’atmosfera cupa.'
            ],
            [
                'name' => 'Red Dead Redemption',
                'release_year' => '2010-05-18',
                'language' => 'English',
                'description' => 'Western action-adventure di Rockstar Games ambientato nei primi anni del Novecento.'
            ],
            [
                'name' => 'Red Dead Redemption 2',
                'release_year' => '2018-10-26',
                'language' => 'Multilingual',
                'description' => 'Prequel di RDR, acclamato per la trama, il realismo e l’open world dettagliato.'
            ],
            [
                'name' => 'Lies of P',
                'release_year' => '2023-09-29',
                'language' => 'Multilingual',
                'description' => 'Soulslike ispirato a Pinocchio, sviluppato da Neowiz Games e Round8 Studio.'
            ],
            [
                'name' => 'Halo: Combat Evolved',
                'release_year' => '2001-11-15',
                'language' => 'English',
                'description' => 'FPS futuristico di Bungie che ha rivoluzionato il genere su console.'
            ],
            [
                'name' => 'The Evil Within',
                'release_year' => '2014-10-14',
                'language' => 'Multilingual',
                'description' => 'Survival horror di Shinji Mikami, creatore di Resident Evil.'
            ],
            [
                'name' => 'Hollow Knight: Silksong',
                'release_year' => '2025-09-04', // placeholder
                'language' => 'Multilingual',
                'description' => 'Seguito di Hollow Knight, sviluppato da Team Cherry, con protagonista Hornet.'
            ],
            [
                'name' => 'Final Fantasy X',
                'release_year' => '2001-07-19',
                'language' => 'Japanese',
                'description' => 'RPG di Square Enix, noto per la storia di Tidus e Yuna.'
            ],
            [
                'name' => 'Metal Gear Solid 3: Snake Eater',
                'release_year' => '2004-11-17',
                'language' => 'Multilingual',
                'description' => 'Stealth action diretto da Hideo Kojima, ambientato durante la Guerra Fredda.'
            ],
            [
                'name' => 'The Legend of Zelda: Breath of the Wild',
                'release_year' => '2017-03-03',
                'language' => 'Multilingual',
                'description' => 'Open world rivoluzionario di Nintendo con Link in un vasto regno di Hyrule.'
            ],
            [
                'name' => 'Elden Ring',
                'release_year' => '2022-02-25',
                'language' => 'Multilingual',
                'description' => 'Action RPG open world sviluppato da FromSoftware in collaborazione con George R.R. Martin.'
            ],
            [
                'name' => 'Bloodborne',
                'release_year' => '2015-03-24',
                'language' => 'Multilingual',
                'description' => 'Action RPG gotico di FromSoftware ambientato a Yharnam.'
            ],
            [
                'name' => 'Dark Souls III',
                'release_year' => '2016-03-24',
                'language' => 'Multilingual',
                'description' => 'Terzo capitolo della saga Souls, famoso per difficoltà e design delle boss fight.'
            ],
            [
                'name' => 'Sekiro: Shadows Die Twice',
                'release_year' => '2019-03-22',
                'language' => 'Multilingual',
                'description' => 'Action game ambientato in un Giappone feudale immaginario, vincitore del GOTY 2019.'
            ],
            [
                'name' => 'Super Mario Odyssey',
                'release_year' => '2017-10-27',
                'language' => 'Multilingual',
                'description' => 'Platform 3D in cui Mario esplora mondi diversi con il cappello Cappy.'
            ],
            [
                'name' => 'The Last of Us',
                'release_year' => '2013-06-14',
                'language' => 'Multilingual',
                'description' => 'Action-adventure narrativo di Naughty Dog, incentrato su Joel ed Ellie.'
            ],
            [
                'name' => 'The Last of Us Part II',
                'release_year' => '2020-06-19',
                'language' => 'Multilingual',
                'description' => 'Seguito diretto del primo, acclamato per la trama intensa e controversa.'
            ],
            [
                'name' => 'Cyberpunk 2077',
                'release_year' => '2020-12-10',
                'language' => 'Multilingual',
                'description' => 'RPG futuristico open world sviluppato da CD Projekt Red.'
            ],
            [
                'name' => 'God of War (2018)',
                'release_year' => '2018-04-20',
                'language' => 'Multilingual',
                'description' => 'Reboot della saga, con Kratos e suo figlio Atreus nella mitologia norrena.'
            ],
            [
                'name' => 'God of War Ragnarök',
                'release_year' => '2022-11-09',
                'language' => 'Multilingual',
                'description' => 'Seguito del reboot del 2018, concludendo la saga norrena di Kratos.'
            ],
        ];


        foreach ($videogames as $videogame) {
            $newVideogame = new Videogame();
            $newVideogame->name = $videogame['name'];
            $newVideogame->release_year = $videogame['release_year'];
            $newVideogame->language = $videogame['language'];
            $newVideogame->description = $videogame['description'];
            $newVideogame->save();
        }
    }
}
