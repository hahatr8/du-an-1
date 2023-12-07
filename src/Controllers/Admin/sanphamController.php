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
       $sanpham = (new SanPham())->all();
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
                'luotxem' => $_POST['luotxem'],
                'id_dm' => $_POST['id_dm'],
               
            ];

            $data['img_sp'] = null;
            $img = $_FILES['img'] ?? null;
            if ($img) {

                $pathSaveDB = '/uploads/' . $img['name'];

                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
                    $data['img_sp'] = $pathSaveDB;
                }
            }

            (new Sanpham())->insert($data);

            header('Location: /admin/sanpham');
        }
        $categories = (new Category())->all();
       
        $this->renderAdmin('sanpham/create', ["categories" => $categories ]);
    }




    public function update()
    {

        $sanpham = (new Sanpham())->findOne($_GET['id']);

        if (isset($_POST['btn-submit'])) {
            $data = [
                'ten_sp' => $_POST['ten_sp'],
                'mota_sp' => $_POST['mota_sp'],
                'gia_sp' => $_POST['gia_sp'],
                'soluong_sp' => $_POST['soluong_sp'],
                'luotxem' => $sanpham['luotxem'],
                'id_dm' => $_POST['id_dm'],
            ];

            $data['img_sp'] = $_POST['img_current'];
            $img = $_FILES['img'] ?? null;
            $flag = false;
            if ($img) {

                $pathSaveDB = '/uploads/' . $img['name'];
                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
                    $data['img_sp'] = $pathSaveDB;
                    $flag = true;
                }
            }

            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            (new Sanpham())->update($data, $conditions);

            if ($flag) {

                // Xóa file dùng hàm unlink 
                // Path file cũng phải giống như $pathUpload
                $pathFile = __DIR__ . '/../../..' . $_POST['img_current'];
                unlink($pathFile);
            }
        }
        $categories = (new Category())->all();
        $sanpham = (new Sanpham())->findOne($_GET["id"]);

        $this->renderAdmin('sanpham/update', ['sanpham' => $sanpham, "categories" => $categories]);
    }

    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new Sanpham)->delete($conditions);

        $pathFile = __DIR__ . '/../../..' . $_POST['img'];
        unlink($pathFile);

        header('Location: /admin/sanpham');
    }

    // public function timkiem(){
    //     if(isset($_POST['timkiem'])){
    //         $kyw = $_POST['kyw'];
    // }
}
