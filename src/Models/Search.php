<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;
class Search extends Model{
    public function search($kyw)
    {
        // Thực hiện câu truy vấn tìm kiếm trong cơ sở dữ liệu
        // Ví dụ: SELECT * FROM products WHERE name LIKE '%keyword%'
        $sql = "SELECT * FROM sanpham WHERE name LIKE '%kyw%'";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);


        // Ghi lại kết quả vào biến $results
        $results = array($kyw);

        return $results;
    }
}