<?php

// Sử dụng namespace của lớp Database
use Config\Database;

// Tạo đối tượng kết nối cơ sở dữ liệu
$db = Database::connect();

// Kiểm tra kết nối
if ($db->connect()) {
    echo "Kết nối thành công đến cơ sở dữ liệu!";
} else {
    echo "Không thể kết nối đến cơ sở dữ liệu!";
}
