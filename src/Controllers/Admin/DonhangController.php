<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\DonHang;
use Ductong\BaseMvc\Models\Login;

class DonhangController extends Controller
{

    /* Lấy danh sách */
    public function index()
    {
        $donhang = (new DonHang())->all();
        $login = (new Login())->all();
       
        $arrayIdUser = [];
        foreach ($login as $item) {
            $arrayIdUser[$item['id']] = $item['tk_user'];
        }

        $this->renderAdmin("donhang/index", ["donhang" => $donhang,"arrayIdUser" => $arrayIdUser]);
    }
}