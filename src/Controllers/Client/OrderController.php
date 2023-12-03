<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        if (isset($_POST['btn-checkout'])) {
            $id_user = $_SESSION['id_user'];
            $id_sp = $_GET['id_sp'];
            echo "id sản phẩm là: " . $id_sp;

            if (!empty($id_sp)) {
                $orderModel = new Order();
                $id_dh = $orderModel->taoDonHang($id_user, $id_sp);

                if ($id_dh) {
                    echo "Đã đặt hàng thành công";
                } else {
                    echo "Đặt hàng không thành công";
                }
            } else {
                echo "Không tìm thấy thông tin sản phẩm";
            }
        }

        // Lấy danh sách đơn hàng
        $orderModel = new Order();
        $orders = $orderModel->getAll();


        $this->render('client/order', [
            'orders' => $orders
        ]);
    }
}