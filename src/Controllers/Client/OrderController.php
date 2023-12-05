<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Order;

require_once 'global.php';

class OrderController extends Controller
{
    public function createOrder()
    {
        if (!isset($_SESSION['id_user'])) {
            echo 'Bạn chưa đăng nhập';
            header('Location: /login');
            return;
        }

        if (isset($_POST['btn-checkout'])) {
            $id_user = $_SESSION['id_user'];
            $order = new Order();


            // Gọi phương thức createOrder()  để tạo đơn hàng
            $id_dh = $order->createOrder($id_user);

            if ($id_dh) {
                $this->render('client/order', ['orders' => $order->getAllOrders()]);
                if (isset($_POST["btn-orderDetails"])) {
                    echo "xem chi tiết nhé!";
                }
            } else {
                echo "Không thể tạo đơn hàng!.";
            }
        }
    }
    public function viewOrderDetails($orderId)
    {
        $order = new Order();
        $orderDetails = $order->getOrderById($orderId);

        // Hiển thị view chi tiết đơn hàng
        $this->render('client/order-details', ['orderDetails' => $orderDetails]);
    }
}