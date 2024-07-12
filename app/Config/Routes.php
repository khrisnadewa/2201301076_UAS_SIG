<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::index');
$routes->get('/login', 'LoginController::index');
$routes->post('/login/auth', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/register', 'Register::register');
$routes->post('/register/store', 'Register::store');
$routes->get('/rumahsakit', 'RumahSakit::index');
$routes->get('/rumahsakit/create', 'RumahSakit::create');
$routes->post('/rumahsakit/store', 'RumahSakit::store');
$routes->get('/rumahsakit/edit/(:segment)', 'RumahSakit::edit/$1');
$routes->post('/rumahsakit/update/(:segment)', 'RumahSakit::update/$1');
$routes->get('/rumahsakit/delete/(:segment)', 'RumahSakit::delete/$1');
