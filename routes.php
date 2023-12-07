<?php

use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Admin\CategoryController;
use Ductong\BaseMvc\Controllers\Admin\SanphamController;
use Ductong\BaseMvc\Controllers\Admin\CommentController;
use Ductong\BaseMvc\Controllers\Admin\DashboardController;
use Ductong\BaseMvc\Controllers\Admin\DonHangController;
use Ductong\BaseMvc\Controllers\Client\CartController;
use Ductong\BaseMvc\Controllers\Client\RegisterController;
use Ductong\BaseMvc\Controllers\Client\UpdateUserController;
use Ductong\BaseMvc\Controllers\Client\SearchController;



use Ductong\BaseMvc\Controllers\Client\HomeController;
use Ductong\BaseMvc\Controllers\Client\SproductController;
use Ductong\BaseMvc\Controllers\Client\LoginController;
use Ductong\BaseMvc\Controllers\Client\OrderController;
use Ductong\BaseMvc\Controllers\Client\ShopController;
use Ductong\BaseMvc\Controllers\Client\ShopsController;

use Ductong\BaseMvc\Router;

$router = new Router();

$router->addRoute('/indexTaiKhoan', UpdateUserController::class, 'index');
$router->addRoute('/editTaiKhoan', UpdateUserController::class, 'update');
$router->addRoute('/register', RegisterController::class, 'create');
$router->addRoute('/login', LoginController::class, 'login');

$router->addRoute('/shops', ShopsController::class, 'index');

$router->addRoute('/shop', ShopController::class, 'allProduct');
$router->addRoute('/search', SearchController::class, 'search');


$router->addRoute('/sproduct', SproductController::class, 'loadProductByCategory');
$router->addRoute('/sproduct', SproductController::class, 'index');
$router->addRoute('/sproduct/create', SproductController::class, 'create');

$router->addRoute('/', HomeController::class, 'index');


$router->addRoute('/addToCart', CartController::class, 'addToCart');
$router->addRoute('/cart', CartController::class, 'index');
$router->addRoute('/cart/delete', CartController::class, 'delete');
$router->addRoute('/cart/updateQuantity', CartController::class, 'updateQuantity');
$router->addRoute('/session_destroy', CartController::class, ' session_destroy');
$router->addRoute('/cart/updateQuantity', CartController::class, ' updateQuantity');




$router->addRoute('/order/cancelOrder', OrderController::class, 'cancelOrder');
$router->addRoute('/order/createOrder', OrderController::class, 'createOrder');
$router->addRoute('/order/showOrder', OrderController::class, 'showOrder');
$router->addRoute('/order/showOrderDetails', OrderController::class, 'showOrderDetails');


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

$router->addRoute('/admin/donhang', DonHangController::class, 'index');
$router->addRoute('/admin/donhang/updateTrangThai', DonHangController::class, 'updateTrangThai');

