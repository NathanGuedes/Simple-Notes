<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $_SESSION['user']['id']);

view('notes/show.view.php', [
    'heading' => 'Home',
    'note' => $note
]);