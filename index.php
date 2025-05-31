<?php

require_once 'functions.php';
//require_once 'router.php';

$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8';

$db = new PDO($dsn, 'root', '');
$stmt = $db->prepare('SELECT * FROM posts');
$stmt->execute();

$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
