<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Daham Alvis',
                'email'=>'daham@gmail.com',
                'Address'=>'Katubedda, Moratuwa',
                'MobileNo'=>'0718890568',
                'password'=>bcrypt("12345678"),
                'EmpType'=>'Owner',
                'RoleID'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Lakmini Fernando',
                'email'=>'lakmini@gmail.com',
                'Address'=>'Keselwatta, Panadure',
                'MobileNo'=>'0718897568',
                'password'=>bcrypt("12345678"),
                'EmpType'=>'Manager',
                'RoleID'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Thilina Nirmal',
                'email'=>'thilina@gmail.com',
                'Address'=>'Hiniduma,Galle',
                'MobileNo'=>'0718878456',
                'password'=>bcrypt("12345678"),
                'EmpType'=>'Cashier',
                'RoleID'=>'3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
          
        ]); 
    }
}
