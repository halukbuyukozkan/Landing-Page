<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'address' => 'Karaciğan Mahallesi Ali Ulvi Kurucu Caddesi - Enn Tepe Mall Office B Blok No 117/905 Karatay/Konya',
                'phone' => '+90 534 323 0447',
                'email' => 'info@globexim.com.tr',
                'created_at' => '2022-10-15 17:18:55',
                'updated_at' => '2022-10-15 17:18:55',
            ),
        ));
        
        
    }
}