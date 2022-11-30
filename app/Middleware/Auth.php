<?php

namespace staditek\OOP\App\Middleware;
use staditek\OOP\App\Core\Router;

class Auth
{
    function before(): void
    {
        if ($_SESSION['auth'] == null) {
            header("location: ".Router::url('/login'));
        }
    }
}
