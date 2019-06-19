<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Pop',
                'created_at' => '2019-06-06 17:18:48',
                'updated_at' => '2019-06-06 17:18:48',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Blues',
                'created_at' => '2019-06-06 17:07:19',
                'updated_at' => '2019-06-06 17:07:19',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Electronic',
                'created_at' => '2019-06-06 17:20:38',
                'updated_at' => '2019-06-06 17:20:38',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Hip Hop',
                'created_at' => '2019-06-07 20:51:36',
                'updated_at' => '2019-06-07 20:51:36',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Soul',
                'created_at' => '2019-06-19 12:52:33',
                'updated_at' => '2019-06-19 12:52:33',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Funk',
                'created_at' => '2019-06-19 12:52:39',
                'updated_at' => '2019-06-19 12:52:39',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Disco',
                'created_at' => '2019-06-19 12:52:49',
                'updated_at' => '2019-06-19 12:52:49',
            ),
        ));
        
        
    }
}