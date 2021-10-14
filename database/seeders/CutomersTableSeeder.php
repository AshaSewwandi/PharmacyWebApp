<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CutomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'Name'=>'Hasini Malshika',
                'NIC'=>'972367543V',
                'Email'=>'hasini@gmail.com',
                'MobileNo'=>'0718890568',
                'Address'=>'Piliyandala, Moratuwa',
                'AdminID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Name'=>'Pahandi Karunarathna',
                'NIC'=>'972367578V',
                'Email'=>'pahandi@gmail.com',
                'MobileNo'=>'0718809456',
                'Address'=>'Hikkaduwa, Galle',
                'AdminID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Name'=>'Kamal Perera',
                'NIC'=>'872390543V',
                'Email'=>'kamal@gmail.com',
                'MobileNo'=>'0719845234',
                'Address'=>'Neluwa, Galle',
                'AdminID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Name'=>'Duleepa Lakshan',
                'NIC'=>'997856456V',
                'Email'=>'duleepa@gmail.com',
                'MobileNo'=>'0715678601',
                'Address'=>'Lenama,Akurassa',
                'AdminID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Name'=>'Anuja Nimnathara',
                'NIC'=>'980945678V',
                'Email'=>'anuja@gmail.com',
                'MobileNo'=>'0711867199',
                'Address'=>'Dammala,Galle',
                'AdminID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]); 
    }
}
