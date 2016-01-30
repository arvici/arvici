<?php

use \Arvici\Component\Router;

/**
 * Router Configuration
 */
Router::define(function(Router $router) {
    $router->before('\App\Middleware\AppGlobal::before');
    $router->after('\App\Middleware\AppGlobal::after');

    $router->get('/', '\App\Controller\Welcome::index');
    $router->get('/json', '\App\Controller\Welcome::json');

    $router->get('/exception', '\App\Controller\Welcome::exception');
});

