<?php
// Include the database connection file
require_once __DIR__ . '/../../app/Database/db_connection.php';;

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Decode the JSON data sent in the request body
    $requestData = json_decode(file_get_contents("php://input"), true);

    // Extract product data from the decoded JSON data
    $products = $requestData['products'];
    foreach ($products as $product) {
        $ma = mysqli_real_escape_string($conn, $product['ma']);
        $soluong = mysqli_real_escape_string($conn, $product['soluong']);
        $sql = "SELECT * FROM product WHERE masp = '$ma'";
        $result = $conn->query($sql);
        $sql1 = "SELECT * FROM product1 WHERE masp = '$ma'";
        $result1 = $conn->query($sql1);
        $sql2 = "SELECT * FROM product2 WHERE masp = '$ma'";
        $result2 = $conn->query($sql2);
        if ($result->num_rows > 0) {
            $tableName="product";
        } else if($result1->num_rows > 0) {
            $tableName="product1";
        } else if($result2->num_rows > 0) {
            $tableName="product2";
        }
        // Thực hiện thêm thông tin chi tiết đơn hàng vào bảng "order_detail"
       $sql3 = "UPDATE $tableName 
            SET count = count - $soluong
            WHERE masp='$ma'";

    // Execute the SQL query
        if ($conn->query($sql3) === TRUE) {
            echo "Trừ thành công";
        } else {
            echo "Lỗi: " . $sql3 . "<br>" . $conn->error;
        }
    } 
    }

$conn->close();
?>



