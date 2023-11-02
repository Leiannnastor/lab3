<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test', 'StudentController::test');
$routes->post('save', 'StudentController::save');
$routes->get('delete/(:any)', 'StudentController::delete/$1');
$routes->get('update/(:any)', 'StudentController::update/$1');