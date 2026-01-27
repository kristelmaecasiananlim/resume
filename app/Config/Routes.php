<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('contact/submit', 'Contact::submit');

// ADD THIS LINE:
$routes->get('hobbies', 'Home::hobbies');

// Admin Routes
$routes->get('/admin/login', 'Admin::login');
$routes->post('/admin/login', 'Admin::login');
$routes->get('/admin/logout', 'Admin::logout');
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->post('/admin/updateContact/(:num)', 'Admin::updateContact/$1');
$routes->get('/admin/deleteContact/(:num)', 'Admin::deleteContact/$1');
$routes->post('/admin/deleteContact/(:num)', 'Admin::deleteContact/$1');
$routes->post('/admin/createProject', 'Admin::createProject');
$routes->post('/admin/updateProject/(:num)', 'Admin::updateProject/$1');
$routes->get('/admin/deleteProject/(:num)', 'Admin::deleteProject/$1');
$routes->get('/admin/duplicateProject/(:num)', 'Admin::duplicateProject/$1');