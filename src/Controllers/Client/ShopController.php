<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Sanpham;

class ShopController extends Controller
{

    public function allProduct()
    {

        $sanphamModel = new Sanpham();
        $danhSachSanPham = $sanphamModel->getAll();


        $data = [
            'danhSachSanPham' => $danhSachSanPham
        ];

        return $this->render('client/shop', $data);
    }
}