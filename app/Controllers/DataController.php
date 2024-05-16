<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DataController extends Controller
{
    // Phương thức xử lý yêu cầu để trả về nội dung của tệp products.js
    public function products()
    {
        // Đường dẫn đến tệp JavaScript trong thư mục app/data
        $filePath = APPPATH . 'data/products.js';

        // Kiểm tra xem tệp tồn tại không
        if (file_exists($filePath)) {
            // Thiết lập kiểu nội dung là JavaScript
            $this->response->setContentType('application/javascript');

            // Đọc nội dung của tệp và trả về
            return $this->response->setBody(file_get_contents($filePath));
        } else {
            // Trả về mã lỗi 404 nếu tệp không tồn tại
            return $this->response->setStatusCode(404)->setBody('File not found');
        }
    }
}
