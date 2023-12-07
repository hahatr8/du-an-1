<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Order;
use Ductong\BaseMvc\Models\Login;

class DonhangController extends Controller
{

    public function index()
    {
        $donhang = (new Order())->all();
        $login = (new Login())->all();

        $arrayIdUser = [];
        foreach ($login as $item) {
            $arrayIdUser[$item['id']] = $item['tk_user'];
        }

        $this->renderAdmin("donhang/index", ["donhang" => $donhang, "arrayIdUser" => $arrayIdUser]);
    }

    public function updateTrangThai()
    {
        $donhangId = $_POST['id'];
        $trangthai = $_POST['trangthai'];

        $order = new Order();
        $order->updateTrangThai($donhangId, $trangthai);

        header('Location: /admin/donhang');
        exit();
    }


    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new Order)->delete($conditions);

        header('Location: /admin/donhang');

    }
}