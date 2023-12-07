<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Sanpham;

class SearchController extends Controller
{

    public function search()
    {

        if (isset($_POST['search'])) {
            $kyw = $_POST['search'];
        }
        $danhSachSPSearch = (new Sanpham())->search($kyw);

        return $this->render('client/search', ['danhSachSPSearch' => $danhSachSPSearch]);
    }
}