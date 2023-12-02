<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Shop extends Model
{
    protected $table = 'sanpham';
    protected $columns = [
        'ten_sp',
        'img_sp',
        'mota_sp',
        'gia_sp',
        'soluong_sp',
        'luotxem',
        'id_dm',
    ];
    public function getAll()
    {

        return $this->all();
    }

}
