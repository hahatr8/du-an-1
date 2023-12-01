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
    ];
    public function getAll()
    {
        return $this->all();
    }

    public function product1() {
            $sql = "
                SELECT 
                    p.name p_name,
                    p.price p_price,
                    p.price_sale p_price_sale,
                    p.img p_img,
                    c.id c_id,
                    c.name c_name
                FROM products p 
            ";
    
            $stmt = $this->conn->prepare($sql);
    
            $stmt->execute();
    
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
    
            return $stmt->fetchAll();
        }

    // public function getLatestLimit10() {
    //     $sql = "
    //         SELECT 
    //             p.name p_name,
    //             p.price p_price,
    //             p.price_sale p_price_sale,
    //             p.img p_img,
    //             c.id c_id,
    //             c.name c_name
    //         FROM products p 
    //         JOIN categories c
    //             ON p.category_id = c.id
    //         WHERE p.is_active = 1
    //         ORDER BY p.id DESC
    //         LIMIT 10
    //     ";

    //     $stmt = $this->conn->prepare($sql);

    //     $stmt->execute();

    //     $stmt->setFetchMode(\PDO::FETCH_ASSOC);

    //     return $stmt->fetchAll();
    // }
}
