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
$routes->get('sesion/logout', 'Sesion::logout');
$routes->get('usuariocrud', 'UsuarioCrud::index');
$routes->get('usuariocrud/create', 'UsuarioCrud::create');
$routes->post('usuariocrud/store', 'UsuarioCrud::store');
$routes->get('usuariocrud/edit/(:num)', 'UsuarioCrud::edit/$1');
$routes->post('usuariocrud/update/(:num)', 'UsuarioCrud::update/$1');
$routes->get('usuariocrud/delete/(:num)', 'UsuarioCrud::delete/$1');
