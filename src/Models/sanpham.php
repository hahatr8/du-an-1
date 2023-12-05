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

    public function sproduct($id)
    {
        $sql = "
            SELECT 
                s.id s_id,
                s.ten_sp s_ten_sp,
                s.img_sp s_img_sp,
                s.mota_sp s_mota_sp,
                s.gia_sp s_gia_sp,
                s.soluong_sp s_soluong_sp,
                s.id_dm s_id_dm,
                s.luotxem s_luotxem
            FROM sanpham s
            WHERE s.id =" . $id;

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
    public function getALLCategoryID($id_dm)
    {
        $sql = "
            SELECT 
                s.id s_id,
                s.ten_sp s_ten_sp,
                s.img_sp s_img_sp,
                s.mota_sp s_mota_sp,
                s.gia_sp s_gia_sp,
                s.soluong_sp s_soluong_sp,
                s.id_dm s_id_dm,
                s.luotxem s_luotxem
            FROM sanpham s
            WHERE s.id_dm =" . $id_dm . " ORDER BY s.id DESC LIMIT 0,4";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}
