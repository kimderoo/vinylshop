<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('records')->delete();
        
        \DB::table('records')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Too Busy Thinking About My Baby / Girl I\'ve Got News For You',
                'artist' => 'The Mardi Gras',
                'label' => 'Music Service',
                'description' => 'Vinyl, 12", 45 RPM',
                'price' => '2',
                'genre_id' => 5,
                'photo_id' => '7',
                'created_at' => '2019-06-06 17:07:00',
                'updated_at' => '2019-06-07 20:50:51',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Das Geheime Leben',
                'artist' => 'Reinhard Lakomy',
                'label' => 'AMIGA',
                'description' => 'Vinyl, LP, Album',
                'price' => '6',
                'genre_id' => 5,
                'photo_id' => '9',
                'created_at' => '2019-06-06 17:21:45',
                'updated_at' => '2019-06-11 17:38:10',
            ),
            2 => 
            array (
                'id' => 5,
            'name' => 'In De 14 Billekens - Super Organ Menu N° 1 (Wereldsuccessen)',
                'artist' => 'Decap-Orgel In De 14 Billekens',
                'label' => 'Cardinal International',
                'description' => 'Vinyl, LP',
                'price' => '1',
                'genre_id' => 4,
                'photo_id' => '8',
                'created_at' => '2019-06-06 17:18:38',
                'updated_at' => '2019-06-06 17:18:54',
            ),
            3 => 
            array (
                'id' => 7,
            'name' => 'Nel Blu Dipinto Di Blu (Volare Version 1989)',
                'artist' => 'Rosario E I Giaguari',
                'label' => 'Out',
                'description' => 'Vinyl, 12", 45 RPM',
                'price' => '6',
                'genre_id' => 5,
                'photo_id' => '10',
                'created_at' => '2019-06-06 17:23:12',
                'updated_at' => '2019-06-06 17:23:12',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'New Orleans Classics',
                'artist' => 'Various',
                'label' => 'Metro Records',
                'description' => 'Vinyl, LP, Compilation',
                'price' => '2',
                'genre_id' => 9,
                'photo_id' => '11',
                'created_at' => '2019-06-19 13:42:53',
                'updated_at' => '2019-06-19 13:44:56',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Live',
                'artist' => 'Massada',
                'label' => 'Kendari Records',
                'description' => '2xLP, Album, Gat',
                'price' => '2',
                'genre_id' => 11,
                'photo_id' => '12',
                'created_at' => '2019-06-19 13:46:30',
                'updated_at' => '2019-06-19 13:48:23',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'Spy In The House Of Love',
            'artist' => 'Was (Not Was)',
                'label' => 'Fontana',
                'description' => 'Vinyl, 12", EP, 45 RPM',
                'price' => '2',
                'genre_id' => 5,
                'photo_id' => '13',
                'created_at' => '2019-06-19 13:49:27',
                'updated_at' => '2019-06-19 13:49:27',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'Open The Doors To Your Heart',
                'artist' => 'J.O.B. Orquestra',
                'label' => 'Sudarshan Disc',
                'description' => 'Vinyl, LP, Album',
                'price' => '2',
                'genre_id' => 10,
                'photo_id' => '14',
                'created_at' => '2019-06-19 13:50:38',
                'updated_at' => '2019-06-19 13:50:38',
            ),
        ));
        
        
    }
}