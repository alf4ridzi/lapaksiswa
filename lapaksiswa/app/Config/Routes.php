<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'View::index');
});

$routes->group('', ['namespace' => 'App\Controllers\Autentikasi'], function($routes) {
    $routes->get('login', 'Autentikasi::login');
    $routes->get('register', 'Autentikasi::register');
    $routes->post('auth/login', 'Autentikasi::validasiMasuk');
    $routes->post('auth/register', 'Autentikasi::prosesRegister');
    $routes->get('keluar', 'Autentikasi::keluar');
});
 
