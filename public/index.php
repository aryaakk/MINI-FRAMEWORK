<?php

use staditek\OOP\App\Controller\UserController;
use staditek\OOP\App\Core\Router;
require_once __DIR__ .'/../vendor/autoload.php';
Router::addRoute('GET', '/tampil', UserController::class, 'tampilData', []);
Router::addRoute('GET', '/tambah', UserController::class, 'tambahData', []);
Router::addRoute('POST', '/save', UserController::class, 'Savee', []);
Router::addRoute('GET', '/showUpdate/:id', UserController::class, 'edit', []);
Router::addRoute('POST', '/update', UserController::class, 'update', []);
Router::addRoute('GET', '/delete/:id', UserController::class, 'delete', []);
Router::run();
?>