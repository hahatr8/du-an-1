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
    ];

    public function getItems($id)
    {
        $sql = "SELECT * FROM giohang WHERE id_user = {$id} ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    public function getTenSanPham($id_sp)
    {
        $sql = "SELECT ten_sp FROM sanpham WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id_sp);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            return $result['ten_sp'];
        }

        return null;
    }

    public function getGiaSanPham($id_sp)
    {
        $sql = "SELECT gia_sp FROM sanpham WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id_sp);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            return $result['gia_sp'];
        }
        return null;
    }

    public function GetImgSanPham($id_sp)
    {
        $sql = "SELECT img_sp FROM sanpham WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id_sp);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            return $result['img_sp'];
        }
        return null;
    }


    public function calculateTotalPrice($id)
    {
        $sql = "SELECT SUM(soluong_sp * gia_sp) AS total_price 
            FROM giohang 
            INNER JOIN sanpham ON giohang.id_sp = sanpham.id 
            WHERE giohang.id_user = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            return $result['total_price'];
        }

        return 0;
    }
    public function getSoLuongSanPham($id_sp)
    {
        $sql = "SELECT soluong_sp FROM giohang WHERE id_sp = :id_sp";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id_sp', $id_sp);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        $soluong = $result['soluong_sp'];

        return $soluong;
    }



}
