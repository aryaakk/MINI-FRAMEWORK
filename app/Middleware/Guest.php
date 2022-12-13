<?php

namespace staditek\OOP\App\Middleware;
use staditek\OOP\App\Core\Router;

class Guest
{
    function before(): void
    {
        if (@$_SESSION['auth']) {
            header("location: ".Router::url('/tampil'));
        }
    }
}