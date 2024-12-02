<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'View::index');
    $routes->get('kategori/(:any)', 'View::kategori/$1');
    $routes->get('search/(:any)', 'View::search/$1');
    $routes->get('produk/(:any)', 'View::produk/$1');
});

$routes->group('', ['namespace' => 'App\Controllers\Autentikasi'], function($routes) {
    $routes->get('login', 'Autentikasi::login');
    $routes->get('register', 'Autentikasi::register');
    $routes->post('auth/login', 'Autentikasi::validasiMasuk');
    $routes->post('auth/register', 'Autentikasi::prosesRegister');
    $routes->get('keluar', 'Autentikasi::keluar');

});

$routes->group('user', ['namespace' => 'App\Controllers\User'], function($routes) {
    $routes->get('/', 'View::dashboard');
});

$routes->group('api', ['namespace' => 'App\Controllers\Api'], function($routes) {
    $routes->get('search/(:any)', 'Produk::search/$1');
});
 
