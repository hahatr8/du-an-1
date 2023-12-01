<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\SanPham;

class SproductController extends Controller
{
    public function index()
    {   
        if (isset($_GET['id_sp'])) {
            $id = $_GET['id_sp'];
            $sanpham = (new SanPham())->sproduct($id);
        }

        return $this->render("client/sproduct", [
            "sanpham" => $sanpham
        ]);
    }
}
