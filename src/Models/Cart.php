<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Cart extends Model
{
    protected $table = 'giohang';
    protected $columns = [
        'id_user',
        'id_sp',
        'soluong_sp',
        'gia_sp',
    ];

    public function getItems($items)
    {
        
    }

    public function getTotalPrice($items)
    {
        $thanhtien = 0;
        foreach ($items as $item) {
            // Tính tổng giá trị của giỏ hàng
            $thanhtien += $item['gia_sp'] * $item['soluong_sp'];
        }
        return $thanhtien;
    }
}
