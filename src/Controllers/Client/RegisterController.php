<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Register;


class RegisterController extends Controller
{


    public function create()
    {
        if (isset($_POST['button-submit'])) {
            $password = $_POST['pass_user'];

            if (strlen($password) < 8) {
                echo '<script>';
                echo 'alert("Mật khẩu phải có ít nhất 8 kí tự.");';
                echo '</script>';
                $this->render('client/register');
                return;
            }


            $username = $_POST['tk_user'];
            if (strpos($username, ' ') !== false) {
                echo '<script>';
                echo 'alert("Tên đăng nhập không được chưa dấu cách!");';
                echo '</script>';
                $this->render('client/register');
                return;
            } else {
            }

            $data = [
                'tk_user' => $_POST['tk_user'],
                'pass_user' => password_hash($password, PASSWORD_DEFAULT),
                'diachi_user' => $_POST['diachi_user'],
                'sdt_user' => $_POST['sdt_user'],
                'email_user' => $_POST['email_user'],
                'role' => 1,
            ];

            $registerModel = new Register();
            $userExists = $registerModel->exists($_POST['tk_user']);

            if ($userExists) {
                echo '<script>';
                echo 'alert("Người dùng đã tồn tại! Vui lòng kiểm tra lại thông tin.");';
                echo '</script>';
                $this->render('client/register');
            } else {
                $registerModel->insert($data);
                header('Location: /');
            }
        } else {
            $this->render('client/register');
        }
    }
  
}
