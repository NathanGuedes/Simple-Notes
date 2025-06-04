<?php

namespace Core;

//use JetBrains\PhpStorm\NoReturn;
//
//$routes = require Base_path('routes.php');
//$uri = parse_url($_SERVER['REQUEST_URI'],  PHP_URL_PATH);
//
//function routerToControllers($uri, $routes): void
//{
//    if(array_key_exists($uri, $routes)) {
//        require base_path($routes[$uri]);
//    }else {
//        abort();
//    }
//}
//

//
//routerToControllers($uri, $routes);

class Router
{
    protected array $routes = [];

    public function route($uri, $requestMethod)
    {
        $requestMethod = strtoupper($requestMethod);
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $requestMethod) {
                return require Base_path($route['controller']);
            }
        }
        abort();
    }

    public function add($method, $uri, $controller): void
    {
        $this->routes[] = compact('method', 'uri', 'controller');
    }

    function get($uri, $controller): void
    {
        $this->add('GET', $uri, $controller);
    }
    function post($uri, $controller): void
    {
        $this->add('POST', $uri, $controller);
    }
    function delete($uri, $controller): void
    {
        $this->add('DELETE', $uri, $controller);
    }
    function patch($uri, $controller): void
    {
        $this->add('PATCH', $uri, $controller);
    }
    function put($uri, $controller): void
    {
        $this->add('PUT', $uri, $controller);
    }
}