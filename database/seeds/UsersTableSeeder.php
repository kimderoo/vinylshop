<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'is_active' => 1,
                'name' => 'Kim',
                'email' => 'kimderoo2@gmail.com',
                'email_verified_at' => NULL,
                'photo_id' => '6',
                'password' => '$2y$10$NgcHoyBGch3vHaENi/w.iOThVZfCOcju5Nvb4f2dz64w.DZTfRGgO',
                'remember_token' => '6Rxne0MST69VnZp4sB87tHDaGNS4dSHnkMeYhxo2rAyEFA8FAEE2Q4RVP2JV',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 17:07:51',
            ),
        ));
        
        
    }
}