<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class NewsController extends Controller
{
    public function add()
    {
        // Kiểm tra xem có dữ liệu được gửi từ form không
        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required',
            'content' => 'required'
        ])) {
            // Lấy dữ liệu từ form
            $data = [
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ];

            // Tạo mới một đối tượng model
            $model = new NewsModel();

            // Thêm tin tức mới vào cơ sở dữ liệu
            $model->save($data);

            // Chuyển hướng về trang danh sách tin tức sau khi thêm thành công
            return redirect()->to('/news');
        } else {
            // Nếu dữ liệu không hợp lệ, hiển thị form để nhập lại
            return view('news/add');
        }
    }
}
