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
        ));
        
        
    }
}