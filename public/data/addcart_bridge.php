<?php
$requestData = json_decode(file_get_contents("php://input"), true);

// Đường dẫn đến tệp addcart.php trong thư mục private của bạn
$addcartUrl = __DIR__ . '/../../app/Database/addcart.php'; // Thay thế 'your-domain.com' và 'private_folder' bằng đường dẫn thực tế của bạn

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $addcartUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
));

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
