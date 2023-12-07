<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Register extends Model
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


    // kiểm tra tk tồn tại hay chưa?
    public function exists($tk_user)
    {
        $sql = "SELECT COUNT(*) FROM taikhoan WHERE tk_user = :tk_user";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':tk_user' => $tk_user]);

        $count = $stmt->fetchColumn();

        return ($count > 0);
    }
}
