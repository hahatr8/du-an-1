<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Order extends Model
{
    protected $table = 'donhang';
    protected $columns = [
        'ngaydathang',
        'trangthai',
        'id_user',
        'tongtien',
    ];



    protected $cart; // Đối tượng cart

    public function __construct()
    {
        parent::__construct();
        $this->cart = new Cart();
    }
    // Sử dụng các phương thức từ cart
    public function getItems($id)
    {
        $sql = "SELECT * FROM giohang WHERE id_user = :id_user ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id_user', $id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
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

        if ($result) {
            return $result['soluong_sp'];
        }
        return null;
    }
    public function taoDonHang($id_user, $id_sp)
    {

        // Tạo đơn hàng
        $ngaydathang = date('Y-m-d');
        $trangthai = 0;
        $tongtien = $this->calculateTotalPrice($id_user);

        $sql = "INSERT INTO donhang (ngaydathang, trangthai, id_user, tongtien) VALUES (:ngaydathang, :trangthai, :id_user, :tongtien)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':ngaydathang', $ngaydathang);
        $stmt->bindParam(':trangthai', $trangthai);
        $stmt->bindParam(':id_user', $id_user);
        $stmt->bindParam(':tongtien', $tongtien);
        $stmt->execute();

        // Lấy ID của đơn hàng vừa tạo
        $id_dh = $this->conn->lastInsertId();

        // Tạo chi tiết đơn hàng
        // $gia_donhang = $this->getGiaSanPham($id_sp);
        // $soluong = $this->getSoLuongSanPham($id_sp);

        // $sql = "INSERT INTO chitietdonhang (id_dh, id_sp, soluong, gia_donhang) VALUES (:id_dh, :id_sp, :soluong, :gia_donhang)";
        // $stmt = $this->conn->prepare($sql);
        // $stmt->bindParam(':id_dh', $id_dh);
        // $stmt->bindParam(':id_sp', $id_sp);
        // $stmt->bindParam(':soluong', $soluong);
        // $stmt->bindParam(':gia_donhang', $gia_donhang);
        // $stmt->execute();

        // Trả về ID của đơn hàng vừa tạo
        return $id_dh;
    }


    public function getAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


}