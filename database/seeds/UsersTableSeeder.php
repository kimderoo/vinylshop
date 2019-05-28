<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id'=>1,
            'is_active'=>1,
            'name'=>'Kim',
            'email' => 'kimderoo2@gmail.com',
            'password'=>bcrypt(123456),
            'remember_token' => str_random(10)]);

    }
}
