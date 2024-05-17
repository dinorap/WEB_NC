<?php
namespace App\Controllers;

use App\Models\NewsModel;

class NewsController {
    public function index() {
        // Khởi tạo đối tượng model
        $model = new NewsModel();

        // Lấy danh sách tin tức từ model
        $news = $model->getAllNews();

        // Hiển thị view và truyền dữ liệu
        include_once '../views/news_index.php';
    }
}
?>
