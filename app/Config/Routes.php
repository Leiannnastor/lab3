<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/manage', 'ManageController::index', ['filter' => 'admin']);
$routes->post('/add', 'ManageController::add', ['filter' => 'admin']);
$routes->post('/edit', 'ManageController::edit', ['filter' => 'admin']);
$routes->get('/delete/(:num)', 'ManageController::delete/$1', ['filter' => 'admin']);


$routes->get('/', 'ProductsController::index', );
$routes->get('/shops', 'ProductsController::shops', ['filter' => 'Authguard']);
$routes->get('/contact', 'ProductsController::contact', ['filter' => 'Authguard']);
$routes->get('/singleprod/(:num)', 'ProductsController::singleprod/$1', ['filter' => 'Authguard']);


$routes->get('/login', 'UserController::login');
$routes->post('/loginauth', 'UserController::loginauth');
$routes->get('/logout', 'UserController::logout');
$routes->get('/register', 'UserController::register');
$routes->post('/registerauth', 'UserController::registerauth');
