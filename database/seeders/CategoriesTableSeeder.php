<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 2,
                'category_id' => NULL,
                'name' => 'Blok',
                'created_at' => '2022-09-25 15:39:38',
                'updated_at' => '2022-09-25 15:39:38',
            ),
        ));
        
        
    }
}