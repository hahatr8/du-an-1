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
            SELECT * FROM binhluan 
            WHERE id_sp = " . $id;

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}
