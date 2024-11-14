<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Perpustakaan::index');
$routes->get('Perpustakaan','Perpustakaan::index');
$routes->get('Perpustakaan/databuku','Perpustakaan::databuku');
$routes->setAutoRoute(true);