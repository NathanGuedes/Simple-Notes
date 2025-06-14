<?php

use Core\Response;
use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd($value) : void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function isCurrentPage($uri): bool
{
    return $_SERVER['REQUEST_URI'] === $uri;
}

function authorize($condition, $statusCode = Response::FORBIDDEN): void
{
    if (! $condition) {
        abort($statusCode);
    }
}

function base_path($path) : string
{
    return BASE_PATH . $path;
}

function view($path, $data = []) : void
{
    extract($data);
    require base_path('views/' . $path);
}

#[NoReturn] function abort($code = 404) : void
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function login($user) : void
{
    $_SESSION['user'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email']
    ];

    session_regenerate_id(true);
}

function logout() : void
{
    $_SESSION = [];

    session_destroy();
    $params = session_get_cookie_params();

    setcookie("PHPSESSID", "", time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

}