<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('photos')->delete();
        
        \DB::table('photos')->insert(array (
            0 => 
            array (
                'id' => 10,
                'file' => '1559841792R-941989-1451736123-4601.jpeg.jpg',
                'created_at' => '2019-06-06 17:23:12',
                'updated_at' => '2019-06-06 17:23:12',
            ),
            1 => 
            array (
                'id' => 9,
                'file' => '1559841705R-340883-1137408597.jpeg.jpg',
                'created_at' => '2019-06-06 17:21:45',
                'updated_at' => '2019-06-06 17:21:45',
            ),
            2 => 
            array (
                'id' => 8,
                'file' => '1559841518R-7483237-1442404683-9842.jpeg.jpg',
                'created_at' => '2019-06-06 17:18:38',
                'updated_at' => '2019-06-06 17:18:38',
            ),
            3 => 
            array (
                'id' => 6,
                'file' => '1559840719portret_red.jpg',
                'created_at' => '2019-06-06 17:05:19',
                'updated_at' => '2019-06-06 17:05:19',
            ),
            4 => 
            array (
                'id' => 7,
                'file' => '1559840820R-1254889-1363206771-3871.jpeg.jpg',
                'created_at' => '2019-06-06 17:07:00',
                'updated_at' => '2019-06-06 17:07:00',
            ),
            5 => 
            array (
                'id' => 11,
                'file' => '1560951773R-2150475-1443590856-9348.jpeg.jpg',
                'created_at' => '2019-06-19 13:42:53',
                'updated_at' => '2019-06-19 13:42:53',
            ),
            6 => 
            array (
                'id' => 12,
                'file' => '1560952103R-1706549-1238242576.jpeg.jpg',
                'created_at' => '2019-06-19 13:48:23',
                'updated_at' => '2019-06-19 13:48:23',
            ),
            7 => 
            array (
                'id' => 13,
                'file' => '1560952167R-184774-1326579517.jpeg.jpg',
                'created_at' => '2019-06-19 13:49:27',
                'updated_at' => '2019-06-19 13:49:27',
            ),
            8 => 
            array (
                'id' => 14,
                'file' => '1560952238R-722736-1504507943-3404.jpeg.jpg',
                'created_at' => '2019-06-19 13:50:38',
                'updated_at' => '2019-06-19 13:50:38',
            ),
        ));
        
        
    }
}