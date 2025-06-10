<?php

$router->get('/', 'controllers/home.php');

$router->get('/notes', 'controllers/notes/index.php')->only("auth");

$router->get('/note', 'controllers/notes/show.php')->only("auth");
$router->delete('/note', 'controllers/notes/destroy.php')->only("auth");

$router->get('/note/edit', 'controllers/notes/edit.php')->only("auth");
$router->patch('/note', 'controllers/notes/update.php')->only("auth");

$router->get('/notes/create', 'controllers/notes/create.php')->only("auth");
$router->post('/notes', 'controllers/notes/store.php')->only("auth");

$router->get('/register/create', 'controllers/register/create.php')->only("guest");
$router->post('/register', 'controllers/register/store.php')->only("guest");

$router->get('/session/create',  'controllers/session/create.php')->only("guest");
$router->post('/session', 'controllers/session/store.php')->only("guest");