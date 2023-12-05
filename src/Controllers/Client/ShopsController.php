<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Sanpham;

class ShopsController extends Controller
{

    public function index()
    {   
        if (isset($_GET["id_dm"])) {
            $id_dm = $_GET["id_dm"];
            $loads = (new SanPham())->getALLCategoryID($id_dm);
            $categories = (new Category())->getCategory($id_dm);
        }

        

        return $this->render('client/shops', ['categories'=> $categories,'loads'=> $loads]);
    }
}