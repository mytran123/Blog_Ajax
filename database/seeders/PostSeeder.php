<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->title = "Ước mơ nhỏ";
        $post->content = "Đi làm công ty tháng 20 củ";
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Điều kì dịu";
        $post->content = "Cầu vồng sẽ xuất hiện sau cơn mưa";
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Sự bất ngờ";
        $post->content = "Ông già noel sẽ xuất hiện vào đêm noel";
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Câu hỏi chưa có lời đáp";
        $post->content = "Trứng có trước hay gà có trước";
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Nỗi trăn trở";
        $post->content = "Cuối tuần nên thức dậy làm case hay ngủ nữa đây";
        $post->user_id = 2;
        $post->save();

        $post = new Post;
        $post->title = "Chuyện cổ tích";
        $post->content = "Bé bé quàng khăn đỏ, có chiếc khăn màu đo đỏ";
        $post->user_id = 2;
        $post->save();

        $post = new Post;
        $post->title = "Chuyện ngày xưa";
        $post->content = "Chuyện ngày xưa đã có bờ tre xanh";
        $post->user_id = 2;
        $post->save();

        $post = new Post;
        $post->title = "Lo lắng";
        $post->content = "Tôi không có gì lo lắng cho hiện tại, mọi thứ thật tuyệt vời";
        $post->user_id = 3;
        $post->save();

        $post = new Post;
        $post->title = "Nghề giáo";
        $post->content = "Tôi không ngờ mình đã đi dạy học 3 năm rồi";
        $post->user_id = 3;
        $post->save();

        $post = new Post;
        $post->title = "Niềm vui mỗi ngày";
        $post->content = "Về nhà với Thị Bông";
        $post->user_id = 3;
        $post->save();
    }
}
