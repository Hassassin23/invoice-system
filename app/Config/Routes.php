<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('users', 'InvoiceController::get_users');
$routes->get('invoices/(:any)/(:any)', 'InvoiceController::get_invoices/$1/$2');
$routes->get('joined', 'InvoiceController::get_joined');
$routes->get('testdb', 'TestDB::index');
