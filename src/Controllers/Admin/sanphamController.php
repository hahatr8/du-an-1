<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Sanpham;

class SanphamController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index()
    {
        $sanpham = (new Sanpham)->all();
        $categories = (new Category())->all();
        
        $this->renderAdmin('sanpham/index', ['sanpham' => $sanpham, 'categories'=> $categories]);
    }

    

    public function create()
    {

        if (isset($_POST['btn-submit'])) {
            $data = [
                'ten_sp' => $_POST['ten_sp'],
                'img_sp' => $_POST['img_sp'],
                'mota_sp' => $_POST['mota_sp'],
                'gia_sp' => $_POST['gia_sp'],
                'soluong_sp' => $_POST['soluong_sp'],
                // 'luotxem' => $_POST['luotxem'],
                'id_dm' => $_POST['id_dm'],
            ];

            (new Sanpham)->insert($data);

            header('Location: /admin/sanpham');
        }

        $categories = (new Category())->all();
        $this->renderAdmin('sanpham/create', ['categories'=> $categories]);
    }


    public function update()
    {
        if (isset($_POST['btn-submit'])) {
            $data = [
                'ten_sp' => $_POST['ten_sp'],
                'img_sp' => $_POST['img_sp'],
                'mota_sp' => $_POST['mota_sp'],
                'gia_sp' => $_POST['gia_sp'],
                'soluong_sp' => $_POST['soluong_sp'],

            ];

            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            (new Sanpham)->update($data, $conditions);
        }

        $user = (new Sanpham)->findOne($_GET['id']);

        $this->renderAdmin('sanpham/update', ['sanpham' => $user]);
    }

    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new Sanpham)->delete($conditions);

        header('Location: /admin/sanpham');
    }
}
