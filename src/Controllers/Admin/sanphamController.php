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
        
        $arrayCategoryIdName = [];
        foreach ($categories as $category) {
            $arrayCategoryIdName[$category['id']] = $category['ten_dm'];
        }


        $this->renderAdmin('sanpham/index', ['sanpham' => $sanpham, "arrayCategoryIdName" => $arrayCategoryIdName]);
    }

    

    public function create()
    {

        if (isset($_POST['btn-submit'])) {
            $data = [
                'ten_sp' => $_POST['ten_sp'],
                'mota_sp' => $_POST['mota_sp'],
                'gia_sp' => $_POST['gia_sp'],
                'soluong_sp' => $_POST['soluong_sp'],
                'luotxem' => 0,
                'id_dm' => $_POST['id_dm'],
            ];

            $data['img'] = null;
            $img = $_FILES['img'] ?? null;
            if ($img) {

                $pathSaveDB = '/img/' . $img['img_sp'];

                $pathUpload = __DIR__ . '/../../../img/' . $img['img_sp'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) { 
                    $data['img'] = $pathSaveDB;
                } 
            }

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

            $data['img'] = $_POST['img_sp'];
            $img = $_FILES['img'] ?? null;
            $flag = false;
            if ($img) {

                $pathSaveDB = '/img/' . $img['img_sp'];

                $pathUpload = __DIR__ . '/../../../img/' . $img['img_sp'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) { 
                    $data['img'] = $pathSaveDB;
                    $flag = true;
                } 
            }

            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            if ($flag) {

                // Xóa file dùng hàm unlink 
                // Path file cũng phải giống như $pathUpload
                $pathFile = __DIR__ .'/../../..'. $_POST['img_sp'];
                unlink($pathFile);
            }

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

    public function detailSp()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            global $stmt;
            $sql = "UPDATE sanpham SET luotxem = luotxem + 1 WHERE id = $id";
            $stmt->query($sql);
        } else {
            echo "loi";
        }
        $this->renderAdmin('sanpham/index', ['sanpham' => $id]);
    }
}
