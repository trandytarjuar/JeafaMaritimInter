<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\BlogController;
use App\Controllers\JobController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog', 'BlogController::index');
$routes->get('/job', 'JobController::index');
$routes->post('/job/submit', 'JobController::submit');
