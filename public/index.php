<?php

use staditek\OOP\App\Controller\HomeController;
use staditek\OOP\App\Core\Router;
require_once __DIR__ .'/../vendor/autoload.php';
Router::addRoute('GET', '/tampil', HomeController::class, 'tampilData', []);
Router::addRoute('GET', '/tambah', HomeController::class, 'tambahData', []);
Router::addRoute('GET', '/save', HomeController::class, 'Save', []);
Router::run();
?>