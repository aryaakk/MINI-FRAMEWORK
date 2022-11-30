<?php
namespace staditek\OOP\App\Core;

class View
{
    public static function renderView(string $view, $data = "")
    {
        require_once __DIR__ . '/../View/template_user/' . $view . '.php';
        require_once __DIR__ . '/../View/template_user/' . $view . '.php';
        require_once __DIR__ . '/../View/template_user/' . $view . '.php';
    }
}
