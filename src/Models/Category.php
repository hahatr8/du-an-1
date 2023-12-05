<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Category extends Model {
    protected $table = 'danhmuc';
    protected $columns = [
        'ten_dm',
    ];
    public function getAll()
    {
        return $this->all();
    }
    public function getCategory($id_dm)
    {
        $sql = "
            SELECT 
                d.id d_id,
                d.ten_dm d_ten_dm
            FROM danhmuc d
            WHERE d.id =" . $id_dm;

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetchAll();
    }
}