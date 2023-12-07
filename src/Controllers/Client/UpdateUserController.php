<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\Register;


// $_SESSION['user'] = $_POST['tk_user']['pass_user'];
class UpdateUserController extends Controller
{
    public function index()
    {
        $user = new User();

        $user = $user->findOne($_SESSION['id_user']);
        $this->render('client/indexTaiKhoan', ['user' => $user]);
    }
    public function update()
    {
        $user = new User();

        if (isset($_POST['btn-submit'])) {
            $newTkUser = $_POST['tk_user'];
            $oldPassword = $_POST['old_password'];
            $newPassword = $_POST['new_password'];
            $storedUser = $user->findOne($_SESSION['id_user']);

            if ($newTkUser !== $storedUser['tk_user']) {
                // Kiểm tra xem tk mới có trùng với giá trị đã tồn tại không
                $registerModel = new Register();
                if ($registerModel->exists($newTkUser)) {
                    echo '<script>';
                    echo 'alert("Người dùng đã tồn tại! Vui lòng chọn tên đăng nhập khác.");';
                    echo '</script>';
                    $user = $user->findOne($_SESSION['id_user']);
                    $this->render('client/editTaiKhoan', ['user' => $user]);
                    return;
                }
                $storedUser['tk_user'] = $newTkUser;
            }

            if (!empty($newPassword)) {
                // Kiểm tra mật khẩu cũ đúng k
                $storedPassword = $storedUser['pass_user'];

                if (!password_verify($oldPassword, $storedPassword)) {
                    echo '<script>';
                    echo 'alert("Mật khẩu cũ không khớp! Vui lòng nhập lại.");';
                    echo '</script>';
                    $user = $user->findOne($_SESSION['id_user']);
                    $this->render('client/editTaiKhoan', ['user' => $user]);
                    return;
                }

                $storedUser['pass_user'] = password_hash($newPassword, PASSWORD_DEFAULT);
            }


            $storedUser['diachi_user'] = $_POST['diachi_user'];
            $storedUser['sdt_user'] = $_POST['sdt_user'];
            $storedUser['email_user'] = $_POST['email_user'];
            $storedUser['role'] = $_POST['role'];

            $data = [
                'tk_user' => $storedUser['tk_user'],
                'pass_user' => $storedUser['pass_user'],
                'diachi_user' => $storedUser['diachi_user'],
                'sdt_user' => $storedUser['sdt_user'],
                'email_user' => $storedUser['email_user'],
                'role' => $storedUser['role'],
            ];

            $conditions = [
                ['id', '=', $_SESSION['id_user']]
            ];

            $user->update($data, $conditions);
            header('Location: /indexTaiKhoan');

        }

        $user = $user->findOne($_SESSION['id_user']);
        $this->render('client/editTaiKhoan', ['user' => $user]);

    }



}
