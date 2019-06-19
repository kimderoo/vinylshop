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
                'remember_token' => 'q7V4Lan6Kd9GxVgdSLt6eZmroxl6eDHStnuAiJjB4b1DvSXG3IAqj3YB6cDJ',
                'created_at' => NULL,
                'updated_at' => '2019-06-06 17:07:51',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 0,
                'is_active' => 0,
                'name' => 'Wim',
                'email' => 'wimderoo2@gmail.com',
                'email_verified_at' => NULL,
                'photo_id' => '',
                'password' => '$2y$10$R9H98h/iiJOu.EI0s9EfSeSkDm81E.uzeaypnaM0cbi3xpo2HstCK',
                'remember_token' => NULL,
                'created_at' => '2019-06-19 19:42:38',
                'updated_at' => '2019-06-19 19:42:38',
            ),
        ));
        
        
    }
}