<?php
$requestData = json_decode(file_get_contents("php://input"), true);
$response = file_get_contents(__DIR__ . '/../../app/Database/addcart.php', false, stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "Content-type: application/json\r\n",
        'content' => json_encode($requestData)
    ]
]));

echo $response;
?>
