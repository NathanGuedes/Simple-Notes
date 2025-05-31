<?php

require_once 'functions.php';
require 'Database.php';
//require_once 'router.php';

$config = require 'configs.php';
$db = new Database($config['database']);

$id = $_GET['id'];
$sql = "SELECT * FROM posts where id= :id";

$posts = $db->query($sql, ['id' => $id])->fetchAll();

dd($posts);
