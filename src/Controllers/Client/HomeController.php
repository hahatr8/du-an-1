<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Sanpham;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index()
    {
        $product1 = (new Sanpham())->all();

        $categories = (new Category())->all();

        $this->render('client/home', ['sanpham' => $product1, "categories" => $categories]);

        // $sanphamModel = new Sanpham();
        // $danhSachSanPham = $sanphamModel->getAll();


        // $data = [
        //     'danhSachSanPham' => $danhSachSanPham
        // ];

        // return $this->render('client/shop', $data);
    }
}