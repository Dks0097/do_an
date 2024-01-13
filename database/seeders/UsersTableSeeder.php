<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'), 
                'role' => 'admin',
                'status' => 'active',
            ],
            //Users
            [
           
                    'name' => 'User',
                    'email' => 'user@gmail.com',
                    'password' => Hash::make('111'),
                    'role' => 'user',
                    'status' => 'active',
              
            ],
        ]);
        DB::table('site_settings')->insert([
            //Admin
            [
                'logo' => 'upload/site/1787348998879090.png',
                'phone' => '0865710154',
                'address' => '99 tô hiến thành',
                'email' => 'support@gmail.com',
                'facebook' => 'fb/dddd.nnnnnn',
                'twitter' => 'tw/dddd.nnnnnn',
                'copyright' => '2024',
                
            ],
            //Users
          
        ]);
        for($i=1;$i <= 3;$i++){
            DB::table('room_types')->insert([
                //Admin
                [
                    'name' => 'Thường'.' '.$i,
                    'created_at'    => date('Y-m-d H:i:s', time()),
                ],
                //Users
                [
               
                    'name' => 'Vip'.' '.$i,
                    'created_at'    => date('Y-m-d H:i:s', time()),
                ],
                [
               
                    'name' => 'Tổng thống'.' '.$i,
                    'created_at'    => date('Y-m-d H:i:s', time()),
                ],
                //Users
              
            ]);

        }
        
        for ($i = 1; $i <= 9; $i++) {
            DB::table('rooms')->insert([
                //Admin
                [
                    'roomtype_id' =>$i,
                    'total_adult' =>5,
                    'total_child' =>1,
                    'room_capacity' =>10,
                    'image' =>'room-img'.$i.'.jpg',
                    'price' => 100000,
                    'discount' => $i,
                   
                    'created_at'    => date('Y-m-d H:i:s', time()),
                ],
                //Users
               
                //Users
              
            ]);
            DB::table('room_numbers')->insert([
                //Admin
                [
                    'rooms_id' =>$i,
                    'room_type_id' =>$i,
                    'room_no' =>$i,
                   
                   
                    'status' => 'Active',
                   
                    'created_at'    => date('Y-m-d H:i:s', time()),
                ],
                //Users
               
                //Users
              
            ]);
        }

    }
}
