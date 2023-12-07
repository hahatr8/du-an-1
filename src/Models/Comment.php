<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Comment extends Model
{
    protected $table = 'binhluan';
    protected $columns = [
        'ngaybinhluan',
        'noidung',
        'id_sp',
        'id_user'
    ];
    public function getAll()
    {
        return $this->all();
    }
    public function loadComment($id)
    {
        $sql = "
            SELECT 
                b.id b_id,
                b.id_user b_id_user,
                b.ngaybinhluan b_ngaybinhluan,
                b.noidung b_noidung,
                b.id_sp b_id_sp,
                t.id t_id,
                t.tk_user t_tk_user
            FROM binhluan b
            JOIN taikhoan t 
                ON b.id_user = t.id
            WHERE b.id_sp = " . $id . "
            ORDER BY b.id DESC";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}
