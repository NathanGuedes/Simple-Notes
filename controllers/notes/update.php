<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $_SESSION['user']['id']);

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters.';
}

if (! empty($errors)){
    return view('notes/create.view.php', [
        'heading' => 'Create Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

header('Location: /notes');
exit();
