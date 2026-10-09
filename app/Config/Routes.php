<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Tasks::welcome');
$routes->get('tasks', 'Tasks::index');
$routes->get('profile', 'Tasks::profile');
$routes->get('about', 'Pages::about');

$routes->get('login', 'Auth::login');
$routes->post('login/authenticate', 'Auth::authenticate');
$routes->get('logout', 'Auth::logout');

$routes->get('users', 'Users::index', ['filter' => 'auth']);
$routes->get('users/new', 'Users::newUser', ['filter' => 'auth']);
$routes->post('users/create', 'Users::create', ['filter' => 'auth']);
$routes->get('users/edit/(:num)', 'Users::edit/$1', ['filter' => 'auth']);
$routes->post('users/update/(:num)', 'Users::update/$1', ['filter' => 'auth']);

$routes->get('customers', 'Customers::index', ['filter' => 'auth']);
$routes->get('customers/new', 'Customers::newCustomer', ['filter' => 'auth']);
$routes->post('customers/create', 'Customers::create', ['filter' => 'auth']);
$routes->get('customers/edit/(:num)', 'Customers::edit/$1', ['filter' => 'auth']);
$routes->post('customers/update/(:num)', 'Customers::update/$1', ['filter' => 'auth']);