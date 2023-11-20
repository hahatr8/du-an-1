<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Cart;

class   CartController extends Controller
{
    public function index()
    {
        $items =  (new Cart())->all();
        $thanhtien = (new Cart())->getTotalPrice($items);

        $this->render('client/cart', [
            "items" => $items,
            "thanhtien" => $thanhtien
        ]);
    }

    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Cart())->delete($conditions);

        header('Location: /cart');
    }
}
