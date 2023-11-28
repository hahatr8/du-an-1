<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Sanpham extends Model
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

    // public function detailSp()
    // {
    //     if (isset($_GET['id'])) {
    //         $id = $_GET['id'];
    //         $sql = "UPDATE sanpham SET luotxem = luotxem + 1 WHERE id = $id";
    //         $stmt = $this->conn->prepare($sql);

    //         $stmt->execute();

    //         $stmt->setFetchMode(\PDO::FETCH_ASSOC);

    //     } else {
    //         echo "loi";
    //     }
    //     return $stmt->fetchAll();
    // }
}
