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
                header("Location: /order/showOrder");
                exit;
            } else {
                echo "Không thể tạo đơn hàng!.";
            }

        }

        if (!isset($_SESSION['id_user'])) {
            echo 'Bạn chưa đăng nhập';
            header('Location: /login');
            return;
        }

    }

    public function showOrder()
    {
        if (!isset($_SESSION['id_user'])) {
            echo 'Bạn chưa đăng nhập';
            header('Location: /login');
            return;
        }
        $order = new Order();
        $orders = $order->getAllOrders();

        if (isset($_GET["btn-orderDetails"])) {

            $this->showOrderDetails();
            return;
        }
        $this->render('client/order', ['orders' => $orders]);

    }

    public function showOrderDetails()
    {
        if (!isset($_SESSION['id_user'])) {
            echo 'Bạn chưa đăng nhập';
            header('Location: /login');
            return;
        }

        if (isset($_GET['id_dh'])) {
            $id_dh = $_GET['id_dh'];

            $order = new Order();
            $orderDetails = $order->getOrderDetails($id_dh);

            $this->render('client/orderDetails', ['orderDetails' => $orderDetails]);
        }
    }
}

