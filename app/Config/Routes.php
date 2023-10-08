<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'LoginController::login');
$routes->get('/register', 'LoginController::register');
$routes->post('/authreg', 'LoginController::authreg');
$routes->post('/authlogin', 'LoginController::authlogin');
$routes->get('/home', 'UserController::home');