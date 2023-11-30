<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Order extends Model
{
    protected $table = 'chitietdonhang';
    protected $columns = [
        'id_dh',
        'id_sp',
        'soluong',
        'gia_donhang',
        'tongtien',
    ];
}