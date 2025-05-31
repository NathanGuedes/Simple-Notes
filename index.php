<?php
require_once 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'],  PHP_URL_PATH);

$routes = [
    '/' => 'controllers/home.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
}