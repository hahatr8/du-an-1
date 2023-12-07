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

    // public function getTotalPrice($items)
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
        $sql = "SELECT SUM(giohang.soluong_sp * sanpham.gia_sp) AS total_price 
            FROM giohang 
            INNER JOIN sanpham ON giohang.id_sp = sanpham.id 
            WHERE giohang.id_user = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($result && $result['total_price']) {
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

    public function getItemByProductId($id_user, $id_sp)
    {
        $query = "SELECT * FROM giohang WHERE id_user = :id_user AND id_sp = :id_sp";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_user', $id_user, \PDO::PARAM_INT);
        $stmt->bindParam(':id_sp', $id_sp, \PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } else {
            return null;
        }
    }
    public function updateSoLuong($cartItemId, $newQuantity)
    {
        $query = "UPDATE giohang SET soluong_sp = :soluong_sp WHERE id = :cartItemId";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':soluong_sp', $newQuantity, \PDO::PARAM_INT);
        $stmt->bindParam(':cartItemId', $cartItemId, \PDO::PARAM_INT);
        $stmt->execute();
    }
    public function addProduct($id_user, $id_sp, $soluong_sp)
    {
        $query = "INSERT INTO giohang (id_user, id_sp, soluong_sp) VALUES (:id_user, :id_sp, :soluong_sp)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_user', $id_user, \PDO::PARAM_INT);
        $stmt->bindParam(':id_sp', $id_sp, \PDO::PARAM_INT);
        $stmt->bindParam(':soluong_sp', $soluong_sp, \PDO::PARAM_INT);
        $stmt->execute();
    }


    // sử dụng khi đặt hàng thành công sẽ xóa giỏ hàng
    public function clearCart($idUser)
    {
        $sql = "DELETE FROM $this->table WHERE id_user = :id_user";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id_user', $idUser);
        $stmt->execute();
    }
}
