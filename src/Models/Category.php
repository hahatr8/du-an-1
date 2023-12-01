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
}