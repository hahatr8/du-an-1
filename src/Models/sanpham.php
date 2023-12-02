<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class SanPham extends Model
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
        'id_color',
        'id_size',
    ];
    public function getAll()
    {
        return $this->all();
    }

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

    // public function search($kyw)
    // {
    //     // Thực hiện câu truy vấn tìm kiếm trong cơ sở dữ liệu
    //     // Ví dụ: SELECT * FROM products WHERE name LIKE '%keyword%'
    //     $sql = "SELECT * FROM sanpham WHERE name LIKE '%keyword%'";

    //     $stmt = $this->conn->prepare($sql);

    //     $stmt->execute();

    //     $stmt->setFetchMode(\PDO::FETCH_ASSOC);


    //     // Ghi lại kết quả vào biến $results
    //     $results = array($kyw);

    //     return $results;
    // }
}
