<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function index2(): string
    {
        return view('index2');
    }
    public function tuyendung(): string
    {
        return view('tuyendung');
    }
    public function trungtambaohanh(): string
    {
        return view('trungtambaohanh');
    }
    public function tintuc(): string
    {
        return view('tintuc');
    }
    public function quenmk(): string
    {
        return view('quenmk');
    }
    public function nguoidung(): string
    {
        return view('nguoidung');
    }
    public function lienhe(): string
    {
        return view('lienhe');
    }
    public function index3(): string
    {
        return view('index3');
    }
    public function gioithieu(): string
    {
        return view('gioithieu');
    }
    public function giohang(): string
    {
        return view('giohang');
    }
    public function chitietsanpham(): string
    {
        return view('chitietsanpham');
    }
    public function admin(): string
    {
        return view('admin');
    }
    public function news(): string
    {
        return view('newsview');
    }
}
