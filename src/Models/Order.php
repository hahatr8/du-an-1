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

    public function createOrder($id_user)
    {

        // Tạo đơn hàng
        $ngayDatHang = date('Y-m-d');
        $trangThai = 0;
        $id_user = $_SESSION['id_user'];
        $tongTien = $this->cart->calculateTotalPrice($id_user);

        $sql = "INSERT INTO donhang(ngaydathang, trangthai, id_user, tongtien) VALUES (:ngaydathang, :trangthai, :id_user, :tongtien)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':ngaydathang', $ngayDatHang);
        $stmt->bindParam(':trangthai', $trangThai);
        $stmt->bindParam(':id_user', $id_user);
        $stmt->bindParam(':tongtien', $tongTien);
        $stmt->execute();

        // Lấy ID của đơn hàng vừa tạo
        $id_dh = $this->conn->lastInsertId();

        // Tạo chi tiết đơn hàng
        $cartItems = $this->cart->getItems($id_user);
        foreach ($cartItems as $item) {
            $idSanPham = $item['id_sp'];
            $soLuong = $item['soluong_sp'];
            $giaSanPham = $this->cart->getGiaSanPham($idSanPham);
            $tongTien = $this->cart->calculateTotalPrice($id_user);

            $sql = "INSERT INTO chitietdonhang (id_dh, id_sp, soluong, gia_donhang, tongtien) VALUES (:id_dh, :id_sp, :soluong, :gia_donhang, :tongtien)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_dh', $id_dh);
            $stmt->bindParam(':id_sp', $idSanPham);
            $stmt->bindParam(':soluong', $soLuong);
            $stmt->bindParam(':gia_donhang', $giaSanPham);
            $stmt->bindParam(':tongtien', $tongTien);
            $stmt->execute();
        }

        // Xóa giỏ hàng sau khi tạo đơn hàng thành công
        $this->cart->clearCart($id_user);

        return $id_dh;
    }

    public function getAllOrders()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getOrderDetails($id_dh)
    {
        $chitietTable = 'chitietdonhang';
        $chitietColumns = [
            'id_dh',
            'id_sp',
            'soluong',
            'gia_donhang',
        ];

        $sql = "SELECT " . implode(', ', $chitietColumns) . ", sanpham.img_sp, sanpham.ten_sp, sanpham.gia_sp
            FROM $chitietTable
            JOIN sanpham ON $chitietTable.id_sp = sanpham.id
            WHERE $chitietTable.id_dh = :id_dh";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id_dh', $id_dh, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getOrderById($id_dh)
    {
        $sql = "SELECT * FROM donhang WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id_dh);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getOrdersByUser($id_user)
    {
        $sql = "SELECT * FROM $this->table WHERE id_user = :id_user";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id_user', $id_user);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function updateTrangThai($donhangId, $trangthai)
    {
        $sql = "UPDATE $this->table SET trangthai = :trangthai WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $donhangId, \PDO::PARAM_INT);
        $stmt->bindParam(':trangthai', $trangthai, \PDO::PARAM_INT);
        $stmt->execute();
    }

}
