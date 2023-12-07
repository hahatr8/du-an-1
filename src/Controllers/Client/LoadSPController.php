<?php

namespace Ductong\BaseMvc\Controllers\Client;
use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Sanpham;

class   LoadSPController extends Controller{
    public function loadAll()
    {
        $sanpham = (new Sanpham)->all();
        $categories = (new Category())->all();
        
        $arrayCategoryIdName = [];
        foreach ($categories as $category) {
            $arrayCategoryIdName[$category['id']] = $category['ten_dm'];
        }


        $this->render('client/sanpham/index', ['sanpham' => $sanpham, "arrayCategoryIdName" => $arrayCategoryIdName]);
    }

}