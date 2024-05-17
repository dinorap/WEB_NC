<?php
namespace App\Models;

use mysqli;

class NewsModel {
    protected $db;

    public function __construct() {
        // Kết nối đến cơ sở dữ liệu
        $this->db = new mysqli('localhost', 'username', 'password', 'dbname');
        if ($this->db->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $this->db->connect_error);
        }
    }

    public function getAllNews() {
        // Truy vấn SQL để lấy tất cả tin tức từ bảng news
        $sql = "SELECT * FROM news";
        $result = $this->db->query($sql);

        // Kiểm tra nếu có kết quả trả về
        $newsArray = [];
        if ($result->num_rows > 0) {
            // Lặp qua từng hàng dữ liệu và lưu vào mảng
            while ($row = $result->fetch_assoc()) {
                $newsArray[] = $row;
            }
        }

        return $newsArray;
    }
}
?>
