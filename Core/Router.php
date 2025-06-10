<?php

namespace Core;

class Router
{
    protected array $routes = [];

    public function route($uri, $requestMethod)
    {
        $requestMethod = strtoupper($requestMethod);
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $requestMethod) {
                if ($route['middleware'] === 'auth') {
                    if (! $_SESSION['user'] ?? false) {
                        header('Location: /');
                        exit();
                    }
                }

                if ($route['middleware'] === 'guest') {
                    if ($_SESSION['user'] ?? false) {
                        header('Location: /');
                        exit();
                    }
                }

                return require Base_path($route['controller']);
            }
        }
        abort();
    }

    public function only($key): static
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
    }

    public function add($method, $uri, $controller): static
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'middleware' => null
        ];

        return $this;
    }

    function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }
    function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }
    function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }
    function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }
    function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }
}