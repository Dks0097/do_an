<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmtpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('smtp_settings')->insert([
            //Admin
            [
                'mailer' => 'smtp',
                'host' => 'smtp.gmail.com',
                'port' => '587',
                'username' => 'duongnguyen3412@gmail.com',
                'password' => 'chjf xrlq kuag fuzu',
                'encryption' => 'tls',
                'from_address' => 'duongnguyen3412@gmail.com',
                'created_at'    => date('Y-m-d H:i:s', time()),
                
            ],
            //Users
          
        ]);
    }
}
