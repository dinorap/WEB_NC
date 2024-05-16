<?php
// Đường dẫn tuyệt đối đến tệp .env trong thư mục private
$env_path = __DIR__ . '/../../app/Database/.env';

$env = file_get_contents($env_path);

$lines = explode("\n",$env);
  
foreach($lines as $line){
  preg_match("/([^#]+)\=(.*)/",$line,$matches);
  if(isset($matches[2])){
    putenv(trim($line));
  }
} 

$servername = getenv('servername');
$username = getenv('username');
$password = getenv('password');
$dbname = getenv('dbname');

// Hiển thị giá trị của các biến


// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8mb4");
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
?>
