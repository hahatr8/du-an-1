<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Size;

class SizeController extends Controller
{

    /* Lấy danh sách */
    public function index()
    {
        $size = (new Size())->all();

        $this->renderAdmin("size/index", ["size" => $size]);
    }

    // /* Thêm mới */
    public function create()
    {
        if (isset($_POST["btn-submit"])) {
            $data = [
                'ten_size' => $_POST['ten_size'],
            ];

            (new Size())->insert($data);

            header('Location: /admin/size');
        }

        $this->renderAdmin("size/create");
    }

    // // /* Cập nhật */
    public function update()
    {

        if (isset($_POST["btn-submit"])) {
            $data = [
                'ten_size' => $_POST['ten_size'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Size())->update($data, $conditions);
        }

        $size = (new Size())->findOne($_GET["id"]);

        $this->renderAdmin("Size/update", ["size" => $size]);
    }

    // /* Xóa */
    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new size())->delete($conditions);

        header('Location: /admin/size');
    }
}
