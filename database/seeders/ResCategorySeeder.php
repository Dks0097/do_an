<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('res_categories')->insert([
            //Admin
            [
                'name' => 'Món khai vị',
                'description' => 'Bao gồm các món như salad, súp, và các món nhỏ để khởi đầu bữa ăn.',
              
                'created_at'    => date('Y-m-d H:i:s', time()),

            ],
            //Users
            [
           
                'name' => 'Món chính',
                'description' => 'Đây là phần chính của bữa ăn, thường bao gồm các món như thịt, cá, hoặc mì.',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
            [
           
                'name' => 'Món tráng miệng',
                'description' => 'Bao gồm các món như bánh ngọt, kem, và trái cây.',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
            [
           
                'name' => 'Đồ uống',
                'description' => 'Bao gồm các loại nước ngọt, nước trái cây, rượu, và cà phê.',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
            [
           
                'name' => 'Thực đơn chay',
                'description' => 'Dành cho những người ăn chay hoặc muốn giảm thịt trong chế độ ăn uống của họ.',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
            [
           
                'name' => 'Thực đơn trẻ em',
                'description' => 'Các món ăn nhẹ nhàng và dễ ăn dành cho trẻ em.',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
            [
           
                'name' => 'Món đặc biệt',
                'description' => 'Những món ăn độc đáo hoặc đặc trưng của nhà hàng.',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
        ]);
    }
}
