<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

// $_SESSION['user'] = $_POST['tk_user']['pass_user'];
class UpdateUserController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */

    public function update()
    {
        
        if (isset($_POST['btn-submit'])) {
            $data = [
                'tk_user' => $_POST['tk_user'],
                'pass_user' => $_POST['pass_user'],
                'diachi_user' => $_POST['diachi_user'],
                'sdt_user' => $_POST['sdt_user'],
                'email_user' => $_POST['email_user'],
                'role' => $_POST['role'],
            ];

            $conditions = [
                ['id', '=', $_SESSION['id_user']] 
            ];

            (new User)->update($data, $conditions);
        }

        $user = (new User)->findOne($_SESSION['id_user']);

        $this->render('client/editTaiKhoan', ['user' => $user]);
    }



}
