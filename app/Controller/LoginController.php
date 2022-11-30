<?php

namespace staditek\OOP\App\Controller;

use staditek\OOP\App\Core\View;
use staditek\OOP\App\Core\Router;
use staditek\OOP\App\Model\ModelUser;

class LoginController
{
    public static $model;

    public function __construct()
    {
        self::$model = new ModelUser();
    }

    public function login()
    {
        View::ViewLogin('header');
        View::ViewLogin('Signin');
    }

    public function LoginPost()
    {
        $user = self::$model->findByEmail($_POST['email']);
        if ($user && password_verify($_POST['password'], $user->password)) {
            $_SESSION['auth'] = $user;
            echo "<script>alert('LOGIN BERHASIL');
            window.location.href = '" . Router::url('/tampil') . "';
            </script>";
        } else {
            echo "<script>alert('LOGIN GAGAL!!EMAIL ATAU PASSWORD SALAH!');
            window.location.href = '" . Router::url('/login') . "';
            </script>";
        }
    }

    public function logout()
    {
        session_destroy();
        echo "<script>alert('LOGOUT BERHASIL');</script>";
        header("location: ".Router::url('/login')); 
    }
}
