<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginController::index');
$routes->get('/usuarios', 'UsuarioController::Index');
$routes->get('/cliente', 'clienteController::index');