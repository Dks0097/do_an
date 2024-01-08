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
    }
}
