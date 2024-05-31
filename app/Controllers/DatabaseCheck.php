<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use mysqli;

class DatabaseCheck extends Controller
{
    public function index()
    {
        // Kiểm tra kết nối cơ sở dữ liệu
        $this->checkDatabaseConnection();
    }

    private function checkDatabaseConnection()
    {
        // Thông tin cấu hình kết nối
        $servername = 'mysql-307a12b1-dminhphuong97-d373.c.aivencloud.com';
        $username = 'avnadmin';
        $password = 'AVNS_tnX-ISdenEn9ep-7iQV';
        $dbname = 'defaultdb';
        $port = 15316;

        // Tạo kết nối
        $conn = new mysqli($servername, $username, $password, $dbname, $port);

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            echo "Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error;
        } else {
            echo "Kết nối cơ sở dữ liệu thành công.";
            // Đóng kết nối sau khi sử dụng
            $conn->close();
        }
    }
}
