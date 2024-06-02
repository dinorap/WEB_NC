<?php
// Đường dẫn tuyệt đối đến tệp .env trong thư mục private
$env_path = __DIR__ . '/../../app/Database/.env';
// Đọc nội dung của tệp .env và trả về nó
echo file_get_contents($env_path);
?>