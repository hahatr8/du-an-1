<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class DonHang extends Model {
    protected $table = 'donhang';
    protected $columns = [
        'ngaydathang',
        'trangthai',
        'id_user',
        'tongtien',


    ];

}