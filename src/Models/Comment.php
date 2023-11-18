<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Comment extends Model {
    protected $table = 'binhluan';
    protected $columns = [
        'ngaybinhluan',
        'noidung',
        'idpro',
    ];
}