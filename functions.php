<?php

function dd($value): void {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value): bool {
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404): void {
    http_response_code($code);
    if ($code = 404) {
        require 'views/404.view.php';
    } else if ($code = 403) {
        require 'views/403.view.php';
    }
}