<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class User extends Model {
    protected $table = 'taikhoan';
    protected $columns = [
        'tk_user',
        'pass_user',
        'diachi_user',
        'sdt_user',
        'email_user',
        'role',
    ];
}