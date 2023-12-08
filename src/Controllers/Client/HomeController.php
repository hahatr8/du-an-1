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
        // $categoriesModel = new Category();
        // $listCategories = $categoriesModel->getAll();

        $sanphamModel = new Sanpham();
        $danhSachSanPham = $sanphamModel->getAll();


        $danhSachSanPhamHot = (new Sanpham())->productHot();

        if (isset($_POST['logout'])) {
            session_destroy();
            header('Location: /login');
            exit();
        }

        return $this->render('client/home', [
            "danhSachSanPham" => $danhSachSanPham,
            "danhSachSanPhamHot" => $danhSachSanPhamHot,
        ]);
    }
}
