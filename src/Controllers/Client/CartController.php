<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Cart;

require_once 'global.php';


if (isset($_SESSION['tk_user'])) {
    $username = $_SESSION['tk_user'];
    class CartController extends Controller
    {
        public function index()
        {
            $id = $_SESSION['id_user'];
            $cartModel = new Cart();
            $items = (new Cart())->getItems($id);
            $totalPrice = 0;
            $totalItems = 0;

            foreach ($items as &$item) {
                $id_sp = $item['id_sp'];

                $ten_sp = $cartModel->getTenSanPham($id_sp);
                $item['ten_sp'] = $ten_sp;
                $gia_sp = $cartModel->getGiaSanPham($id_sp);
                $item['gia_sp'] = $gia_sp;
                $img_sp = $cartModel->getImgSanPham($id_sp);
                $item['img_sp'] = $img_sp;

                $soluong_sp = $item['soluong_sp'];
                $item['subtotal'] = $gia_sp * $soluong_sp;
                $totalPrice += $item['subtotal'];
                $totalItems++;  // Tăng tổng số mặt hàng lên 1
            }
            $_SESSION['totalPrice'] = $totalPrice;
            $_SESSION['totalItems'] = $totalItems;

            $this->render('client/cart', [
                "items" => $items,
                "totalPrice" => $totalPrice,
                "totalItems" => $totalItems,

            ]);
        }

        public function delete()
        {
            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Cart())->delete($conditions);

            header('Location: /cart');
            exit();
        }



        public function addToCart()
        {
            if (isset($_POST['btn-addToCart'])) {
                $id_user = $_SESSION['id_user'];
                $id_sp = $_POST['id_sp'];
                $soluong_sp = $_POST['soluong_sp'];

                $cartModel = new Cart();

                // Ktra sp đã có trong giỏ hàng chưa
                $existingItem = $cartModel->getItemByProductId($id_user, $id_sp);

                if ($existingItem) {
                    // đã có thì cộng số lượng
                    $newQuantity = $existingItem['soluong_sp'] + $soluong_sp;
                    $cartModel->updateSoLuong($existingItem['id'], $newQuantity);
                } else {
                    $cartModel->addProduct($id_user, $id_sp, $soluong_sp);
                }
            }


            header('Location: /cart');
            exit();
        }

        public function session_destroy()
        {
            session_destroy();
        }

    }


} else {
    echo 'Bạn chưa đăng nhập';
    header('Location: /login');
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: /login');
    exit();
}
if (isset($_POST['btn-checkout'])) {
    header('Location: /order');
}

if (isset($_POST['btn-order'])) {
    header('Location: /order/createOrder');
}





