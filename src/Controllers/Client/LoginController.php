<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Login;

require_once 'global.php';

class LoginController extends Controller
{
    public function login()
    {
        if (isset($_POST['btn-submit-login'])) {
            $username = $_POST['tk_user'];
            $password = $_POST['pass_user'];


            // Kiểm tra thông tin đăng nhập
            $loginModel = new Login();
            $isLoggedIn = $loginModel->authenticate($username, $password);

            if ($isLoggedIn) {
                $_SESSION['tk_user'] = $username;


                // Lấy ID người dùng từ cơ sở dữ liệu
                $userId = $loginModel->getIdByName($username);
                $_SESSION['id_user'] = $userId;

                header('Location: /');
                exit;
            } else {
                echo '<script>';
                echo 'alert("Tên đăng nhập hoặc mật khẩu không đúng!.");';
                echo '</script>';
            }
        }
        $this->render('client/login');
    }
}
