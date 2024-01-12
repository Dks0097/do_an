<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = [
            ['rescat_id' =>1 ,'name' => 'Bún bò', 'description' => 'Mì gạo với thịt bò và nước dùng thơm phức', 'unit_price' => 100000,'promotion_price' => 0 ],
            ['rescat_id' =>2 ,'name' => 'Phở bò', 'description' => 'Mì gạo với thịt bò và nước dùng từ xương bò', 'unit_price' => 120000 ,'promotion_price' => 0 ],
            ['rescat_id' =>1 ,'name' => 'Bánh mì', 'description' => 'Bánh mì nướng giòn với thịt và rau sống', 'unit_price' => 50000 ,'promotion_price' => 0 ],
            ['rescat_id' =>1 ,'name' => 'Cơm tấm', 'description' => 'Cơm tấm với thịt nướng, trứng và rau sống', 'unit_price' => 80000 ,'promotion_price' => 0 ],
            ['rescat_id' =>1 ,'name' => 'Gỏi cuốn', 'description' => 'Bánh tráng cuốn với tôm, thịt, bún và rau sống', 'unit_price' => 60000 ,'promotion_price' => 0 ],
            ['rescat_id' => 4 ,'name' => 'Cà phê sữa', 'description' => 'Cà phê đen pha với sữa đặc', 'unit_price' => 40000 ,'promotion_price' => 0 ],
            ['rescat_id' => 4 ,'name' => 'Trà đào', 'description' => 'Trà tươi pha với đào và đường', 'unit_price' => 50000,'promotion_price' => 0  ],
            ['rescat_id' => 4 ,'name' => 'Nước cam', 'description' => 'Nước ép từ cam tươi', 'unit_price' => 60000 ,'promotion_price' => 0 ],
            ['rescat_id' => 4 ,'name' => 'Sinh tố dứa', 'description' => 'Sinh tố từ dứa tươi và sữa', 'unit_price' => 50000 ,'promotion_price' => 0 ],
            ['rescat_id' => 4 ,'name' => 'Bia', 'description' => 'Bia lạnh', 'unit_price' => 30000 ,'promotion_price' => 0 ]
           
        ];
        foreach ($roles as $role) {
            DB::table('res_products')->insert($role);
        }
    }
}
