<?php

namespace Database\Seeders;

use App\Models\BookArea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookArea::create(
            [

                'short_title'   => "Đặt Phòng Nhanh",
                'main_title'    => "Chúng tôi là người giỏi nhất mọi thời đại và vì vậy hãy đặt chỗ nhanh",
                'short_desc'    => "Atoli là một trong những khu nghỉ dưỡng tốt nhất trên thị trường toàn cầu và đó là lý do tại sao bạn sẽ có được một cuộc sống xa hoa trên thị trường toàn cầu. Chúng tôi luôn cung cấp cho bạn sự hỗ trợ đặc biệt dành cho tất cả khách hàng của chúng tôi và đó sẽ là lý do chính khiến bạn được yêu thích nhất.",
                'image'    => "upload/bookarea/1787589257875300.png",
              


                'created_at'    => date('Y-m-d H:i:s', time()),
                'updated_at'    => date('Y-m-d H:i:s', time()),
            ],
        );
    }
}
