<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

// $_SESSION['user'] = $_POST['tk_user']['pass_user'];
class UserController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index()
    {
        $users = (new User)->all();

        $this->renderAdmin('users/index', ['users' => $users]);
    }

    public function create()
    {
        if (isset($_POST['btn-submit-login'])) {
            $data = [
                'tk_user' => $_POST['tk_user'],
                'pass_user' => $_POST['pass_user'],
                'diachi_user' => $_POST['diachi_user'],
                'sdt_user' => $_POST['sdt_user'],
                'email_user' => $_POST['email_user'],
                'role' => $_POST['role'],
            ];

            (new User)->insert($data);

            header('Location: /admin/users');
        }

        $this->renderAdmin('users/create');
    }

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
                ['id', '=', $_GET['id']]
            ];

            (new User)->update($data, $conditions);
        }

        $user = (new User)->findOne($_GET['id']);

        $this->renderAdmin('users/update', ['user' => $user]);
    }

    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new User)->delete($conditions);

        header('Location: /admin/users');
    }

}
