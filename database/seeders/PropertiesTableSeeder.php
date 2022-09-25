<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('properties')->delete();
        
        \DB::table('properties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Polished',
                'type' => 'surface',
                'created_at' => '2022-09-25 15:40:02',
                'updated_at' => '2022-09-25 15:40:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Honed',
                'type' => 'surface',
                'created_at' => '2022-09-25 15:40:11',
                'updated_at' => '2022-09-25 15:40:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Brushed',
                'type' => 'surface',
                'created_at' => '2022-09-25 15:40:17',
                'updated_at' => '2022-09-25 15:40:17',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '30X30',
                'type' => 'dimension',
                'created_at' => '2022-09-25 16:01:49',
                'updated_at' => '2022-09-25 16:01:49',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '30X60',
                'type' => 'dimension',
                'created_at' => '2022-09-25 16:01:56',
                'updated_at' => '2022-09-25 16:01:56',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '60x60',
                'type' => 'dimension',
                'created_at' => '2022-09-25 16:02:12',
                'updated_at' => '2022-09-25 16:02:12',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Block',
                'type' => 'available',
                'created_at' => '2022-09-25 16:10:36',
                'updated_at' => '2022-09-25 16:10:36',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Slab',
                'type' => 'available',
                'created_at' => '2022-09-25 16:10:46',
                'updated_at' => '2022-09-25 16:10:46',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Tile',
                'type' => 'available',
                'created_at' => '2022-09-25 16:10:55',
                'updated_at' => '2022-09-25 16:10:55',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Exterior Wall Cladding',
                'type' => 'usage',
                'created_at' => '2022-09-25 16:19:32',
                'updated_at' => '2022-09-25 16:19:32',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Interior Wall Cladding',
                'type' => 'usage',
                'created_at' => '2022-09-25 16:19:43',
                'updated_at' => '2022-09-25 16:19:43',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Flooring',
                'type' => 'usage',
                'created_at' => '2022-09-25 16:19:53',
                'updated_at' => '2022-09-25 16:19:53',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Stairs',
                'type' => 'usage',
                'created_at' => '2022-09-25 16:20:04',
                'updated_at' => '2022-09-25 16:20:04',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Kitchen Countertop',
                'type' => 'usage',
                'created_at' => '2022-09-25 16:20:13',
                'updated_at' => '2022-09-25 16:20:13',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Bathroom Countertop',
                'type' => 'usage',
                'created_at' => '2022-09-25 16:20:22',
                'updated_at' => '2022-09-25 16:20:22',
            ),
        ));
        
        
    }
}