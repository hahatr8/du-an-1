<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;
use Ductong\BaseMvc\Router;

class Login extends Model
{
    protected $table = 'taikhoan';
    protected $columns = [
        'tk_user',
        'pass_user',
        'diachi_user',
        'sdt_user',
        'email_user',
        'role',
    ];

    public function authenticate($username, $password)
    {
        // Kiểm tra thông tin đăng nhập trong cơ sở dữ liệu
        $query = "SELECT * FROM {$this->table} WHERE tk_user = :username";
        $params = [
            ':username' => $username
        ];

        $statement = $this->conn->prepare($query);
        $statement->execute($params);

        $result = $statement->fetchAll();

        // Kiểm tra kết quả truy vấn và xác thực mật khẩu
        if ($result && password_verify($password, $result[0]['pass_user'])) {
            // Xác thực thành công
            return true;
        }

        // Xác thực thất bại
        return false;
    }
    public function getIdByName($username)
    {
        $query = "SELECT id FROM {$this->table} WHERE tk_user = :username";
        $params = [
            ':username' => $username
        ];

        $statement = $this->conn->prepare($query);
        $statement->execute($params);

        $result = $statement->fetch();

        if ($result) {
            return $result['id'];
        } else {
            return null;
        }
    }
}
