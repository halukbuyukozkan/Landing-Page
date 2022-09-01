<?php

namespace Database\Seeders;

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
                'created_at' => '2022-09-01 11:41:34',
                'email' => 'halukbuyukozkan@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Haluk',
                'password' => '$2y$10$2DDg/qchoRNKjz9ox3k2uutTOUYFMrgl89fRukYGVXjrOvMWv34I6',
                'remember_token' => NULL,
                'updated_at' => '2022-09-01 11:41:34',
            ),
        ));
        
        
    }
}