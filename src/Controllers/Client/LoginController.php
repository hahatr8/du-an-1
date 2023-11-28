<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Login;

class LoginController extends Controller
{
    public function login()
    {
        $this->render('client/login');
        if (isset($_POST['btn-submit-login'])) {

            $username = $_POST['tk_user'];
            $password = $_POST['pass_user'];

            // Kiểm tra thông tin đăng nhập
            $loginModel = new Login();
            $isLoggedIn = $loginModel->authenticate($username, $password);

            if ($isLoggedIn) {
                header('Location: /');
                $this->render('client/register');




                exit;
            } else {
                echo '<script>';
                echo 'alert("Tên đăng nhập hoặc mật khẩu không đúng!.");';
                echo '</script>';
            }
        }
    }
}
