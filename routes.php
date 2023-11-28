<?php

use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Admin\CategoryController;
use Ductong\BaseMvc\Controllers\Admin\SanphamController;
use Ductong\BaseMvc\Controllers\Admin\CommentController;
use Ductong\BaseMvc\Controllers\Admin\DashboardController;
use Ductong\BaseMvc\Controllers\Admin\ColorController;
use Ductong\BaseMvc\Controllers\Admin\SizeController;
use Ductong\BaseMvc\Controllers\Client\CartController;
use Ductong\BaseMvc\Controllers\Client\HomeController;  
// use Ductong\BaseMvc\Controllers\Client\LoadSPController;
use Ductong\BaseMvc\Controllers\Client\RegisterController;

use Ductong\BaseMvc\Controllers\Client\LoginController;
use Ductong\BaseMvc\Router;

$router = new Router();


$router->addRoute('/register', RegisterController::class, 'create');

$router->addRoute('/login', LoginController::class, 'login');




$router->addRoute('/', HomeController::class, 'index');

$router->addRoute('/cart', CartController::class, 'index');
$router->addRoute('/cart/delete', CartController::class, 'delete');



$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');

$router->addRoute('/admin/sanpham', SanphamController::class, 'index');
$router->addRoute('/admin/sanpham/create', SanphamController::class, 'create');
$router->addRoute('/admin/sanpham/update', SanphamController::class, 'update');
$router->addRoute('/admin/sanpham/delete', SanphamController::class, 'delete');

$router->addRoute('/admin/comments', CommentController::class, 'index');
$router->addRoute('/admin/comments/create', CommentController::class, 'create');
$router->addRoute('/admin/comments/update', CommentController::class, 'update');
$router->addRoute('/admin/comments/delete', CommentController::class, 'delete');

$router->addRoute('/admin/color', ColorController::class, 'index');
$router->addRoute('/admin/color/create', ColorController::class, 'create');
$router->addRoute('/admin/color/update', ColorController::class, 'update');
$router->addRoute('/admin/color/delete', ColorController::class, 'delete');

$router->addRoute('/admin/size', SizeController::class, 'index');
$router->addRoute('/admin/size/create', SizeController::class, 'create');
$router->addRoute('/admin/size/update', SizeController::class, 'update');
$router->addRoute('/admin/size/delete', SizeController::class, 'delete');

//clientColorController
// $router->addRoute('/client/trangchu', LoadSPController::class, 'loadAll');