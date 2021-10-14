<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'Name'=>'Tab Digene',
                'Brand'=>'Tibitol',
                'Price'=>'120',
                'Quantity'=>'70',
                'AdminID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Name'=>'ORS Liquid 100ml tetra pack',
                'Brand'=>'Celib',
                'Price'=>'250',
                'Quantity'=>'350',
                'AdminID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Name'=>'Band aid Spot',
                'Brand'=>'Dan',
                'Price'=>'175',
                'Quantity'=>'600',
                'AdminID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Name'=>'Baby Diaper-small Singles',
                'Brand'=>'Eltonic',
                'Price'=>'135',
                'Quantity'=>'400',
                'AdminID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Name'=>'Mineral Water 500ml',
                'Brand'=>'Azoo',
                'Price'=>'650',
                'Quantity'=>'67',
                'AdminID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]); 
    }
}
