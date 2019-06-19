<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'token' => 'r5x24fgy',
                'user_id' => 1,
                'created_at' => '2019-06-19 19:41:26',
                'updated_at' => '2019-06-19 19:41:26',
            ),
            1 => 
            array (
                'id' => 2,
                'token' => '3qs037pw',
                'user_id' => 2,
                'created_at' => '2019-06-19 19:43:03',
                'updated_at' => '2019-06-19 19:43:03',
            ),
        ));
        
        
    }
}