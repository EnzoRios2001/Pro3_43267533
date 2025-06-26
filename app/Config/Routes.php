<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('sesion', 'Sesion::index');
$routes->get('principal', 'Principal::index');
$routes->post('sesion/registro', 'Sesion::registro');
$routes->post('sesion/login', 'Sesion::login');
