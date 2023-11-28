<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Color extends Model {
    protected $table = 'color';
    protected $columns = [
        'ten_color',
    ];
}