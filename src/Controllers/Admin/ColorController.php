<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Color;

class ColorController extends Controller
{

    /* Lấy danh sách */
    public function index()
    {
        $color = (new Color())->all();

        $this->renderAdmin("color/index", ["color" => $color]);
    }

    /* Thêm mới */
    public function create()
    {
        if (isset($_POST["btn-submit"])) {
            $data = [
                'ten_color' => $_POST['ten_color'],
            ];

            (new Color())->insert($data);

            header('Location: /admin/color');
        }

        $this->renderAdmin("color/create");
    }

    // /* Cập nhật */
    public function update()
    {

        if (isset($_POST["btn-submit"])) {
            $data = [
                'ten_color' => $_POST['ten_color'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Color())->update($data, $conditions);
        }

        $color = (new Color())->findOne($_GET["id"]);

        $this->renderAdmin("color/update", ["color" => $color]);
    }

    // /* Xóa */
    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Color())->delete($conditions);

        header('Location: /admin/color');
    }
}
