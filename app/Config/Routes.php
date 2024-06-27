<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halodunia', 'HelloWorld::halodunia');
$routes->get('/form', 'Form::index');
$routes->match(['post'], '/form-submit', 'FormController::submit');

