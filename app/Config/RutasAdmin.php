<?php

$routes->group('' ,['namespace' => 'App\Controllers'],function($routes){
    $routes->get('login', 'LoginController::login',['as' => 'login']);
    $routes->post('login', 'LoginController::attemptLogin');
    $routes->get('logout', 'LoginController::logout');

    $routes->get('cuenta', 'CuentaController::cuenta', ['as' => 'cuenta']);
});