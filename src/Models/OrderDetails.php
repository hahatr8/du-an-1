<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class OrderDetails extends Model
{
    protected $table = 'chitietdonhang';
    protected $columns = [
        'id_dh',
        'id_sp',
        'soluong',
        'gia_donhang',
    ];

    public function createOrderDetail($id_dh, $id_sp, $soluong, $gia_donhang)
    {
        $sql = "INSERT INTO {$this->table} (id_dh, id_sp, soluong, gia_donhang) VALUES (:id_dh, :id_sp, :soluong, :gia_donhang)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id_dh', $id_dh);
        $stmt->bindParam(':id_sp', $id_sp);
        $stmt->bindParam(':soluong', $soluong);
        $stmt->bindParam(':gia_donhang', $gia_donhang);
        $stmt->execute();

        return $this->conn->lastInsertId();
    }

   
}