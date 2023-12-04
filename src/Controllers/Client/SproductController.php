<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\SanPham;

class SproductController extends Controller
{
    public function index()
    {
        if (isset($_GET['id_sp'])) {
            $id = $_GET['id_sp'];
            $sanpham = (new SanPham())->sproduct($id);
        }

        $commentsModel = new Comment();
        $danhSachComments = $commentsModel->loadComment($id);
        if (isset($_GET['id_dm'])) {
            $id_dm = $_GET['id_dm'];
            $loads = (new SanPham())->getALLCategoryID($id_dm);
        }
        return $this->render("client/sproduct", [
            "sanpham" => $sanpham,
            "danhSachComments" => $danhSachComments,
            "loads" => $loads,
        ]);
    }

    public function create()
    {
        if (isset($_POST["btn-submit"])) {
            $data = [
                'noidung' => $_POST['noidung'],
                'ngaybinhluan' => date('H:i d-m-y'),
                'id_user' => $_POST['id_user'],
                'id_sp' => $_POST['id_sp'],
            ];

            (new Comment())->insert($data);

            $url = $_POST['id_sp'];

            header('Location: /sproduct?id_sp=' . $url . '');
        }
        return $this->render("client/sproduct");
    }
    public function loadProductByCategory()
    {
        if (isset($_POST["id_dm"])) {
            $id_dm = $_POST["id_dm"];
            $load = (new SanPham())->getALLCategoryID($id_dm);
        }
        return $this->render("client/sproduct", [
            "load" => $load
        ]);
    }
}
