<?php

//return [
//    '/' => 'controllers/home.php',
//    '/notes' => 'controllers/notes/index.php',
//    '/note' => 'controllers/notes/show.php',
//    '/notes/create' => 'controllers/notes/create.php',
//];

$router->get('/', 'controllers/home.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');