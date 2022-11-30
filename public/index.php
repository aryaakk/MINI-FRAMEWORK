<?php

use staditek\OOP\App\Controller\UserController;
use staditek\OOP\App\Controller\LoginController;

use staditek\OOP\App\Core\Router;
use staditek\OOP\App\Middleware\Auth;
use staditek\OOP\App\Middleware\Guest;

require_once __DIR__ .'/../vendor/autoload.php';
Router::addRoute('GET', '/tampil', UserController::class, 'tampilData', [Auth::class]);
Router::addRoute('GET', '/tambah', UserController::class, 'tambahData', [Auth::class]);
Router::addRoute('POST', '/save', UserController::class, 'Savee', [Auth::class]);
Router::addRoute('GET', '/showUpdate/:id', UserController::class, 'edit', [Auth::class]);
Router::addRoute('POST', '/update', UserController::class, 'update', [Auth::class]);
Router::addRoute('GET', '/delete/:id', UserController::class, 'delete', [Auth::class]);

Router::addRoute('GET', '/logout', LoginController::class, 'logout', []);
Router::addRoute('GET', '/login', LoginController::class, 'login', [Guest::class]);
Router::addRoute('POST', '/postLogin', LoginController::class, 'LoginPost', [Guest::class]);
Router::run();
?>