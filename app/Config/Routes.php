<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/admin/home', 'Admin::home');

$routes->get('/admin/testimonial', 'Admin::testimonial');
$routes->get('/admin/testimonial/create', 'Admin::create');
$routes->post('/admin/testimonial/store', 'Admin::store');