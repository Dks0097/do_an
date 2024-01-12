<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('blog_categories')->insert([
            //Admin
            [
                'category_name' => 'Khám Phá Khách Sạn',
                'category_slug' => 'Đánh giá và giới thiệu về các khách sạn trên khắp thế giới.',
              
                'created_at'    => date('Y-m-d H:i:s', time()),

            ],
            //Users
            [
           
                'category_name' => 'Ẩm Thực Nhà Hàng',
                'category_slug' => 'Chia sẻ về các món ăn ngon tại các nhà hàng nổi tiếng',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
            [
           
                'category_name' => 'Dịch Vụ Khách Sạn',
                'category_slug' => 'Phân tích và đánh giá về dịch vụ của các khách sạn.',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
            [
           
                'category_name' => 'Thiết Kế Nhà Hàng',
                'category_slug' => 'Giới thiệu về thiết kế và trang trí nội thất của các nhà hàng.',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
            [
           
                'category_name' => 'Du Lịch & Lưu Trú',
                'category_slug' => 'Kinh nghiệm du lịch và lựa chọn nơi lưu trú.',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
            [
           
                'category_name' => 'Sự Kiện Khách Sạn',
                'category_slug' => 'Thông tin về các nhà hàng sử dụng nguyên liệu hữu cơ và thân thiện với môi trường.',
                    'created_at'    => date('Y-m-d H:i:s', time()),

              
            ],
        ]);
    }
}
