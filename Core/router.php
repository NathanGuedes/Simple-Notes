<?php

use JetBrains\PhpStorm\NoReturn;

$routes = require Base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'],  PHP_URL_PATH);

function routerToControllers($uri, $routes): void
{
    if(array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    }else {
        abort();
    }
}

#[NoReturn] function abort($code = 404) : void
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

routerToControllers($uri, $routes);