<?php

use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\SanPham;

session_start();    

const DB_HOST = 'localhost';
const DB_DATABASE = 'du-an-1';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';

$GLOBALS['categoryForMenu'] = (new Category)->getAll();


