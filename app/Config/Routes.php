<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//router view
$routes->get('/', 'Home::index');
$routes->get('/index.php', 'Home::index');
$routes->get('/index2.php', 'Home::index2');
$routes->get('/tuyendung.php', 'Home::tuyendung');
$routes->get('/trungtambaohanh.php', 'Home::trungtambaohanh');
$routes->get('/tintuc.php', 'Home::tintuc');
$routes->get('/quenmk.php', 'Home::quenmk');
$routes->get('/nguoidung.php', 'Home::nguoidung');
$routes->get('/lienhe.php', 'Home::lienhe');
$routes->get('/index3.php', 'Home::index3');
$routes->get('/gioithieu.php', 'Home::gioithieu');
$routes->get('/giohang.php', 'Home::giohang');
$routes->get('/chitietsanpham.php', 'Home::chitietsanpham');
$routes->get('/admin.php', 'Home::admin');

//router data
$routes->get('Database/db_connection', 'DataController::db_conn');
$routes->post('/news/create', 'NewsController::create');

$routes->get('database-check', 'DatabaseCheck::index');

