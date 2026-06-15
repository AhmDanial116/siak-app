<?php
// app/Config/Routes.php
use CodeIgniter\Router\RouteCollection;
/**
* @var RouteCollection $routes
*/
$routes->get('/', 'Dashboard::index');
$routes->get('mahasiswa', 'Mahasiswa::index');
$routes->get('matkul', 'MatKul::index');
$routes->get('dosen', 'Dosen::index');