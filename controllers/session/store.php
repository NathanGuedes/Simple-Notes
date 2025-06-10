<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please enter a valid email address';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please enter a valid password';
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'heading' => 'Log In',
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
$user = $db->query("SELECT * FROM users where email= :email", [
    'email' => $email
])->find();

if ($user){
    if (password_verify($password, $user['password'])) {
        login([
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email']
        ]);

        header('Location: /');
        exit();
    }
}

view('session/create.view.php', [
    'heading' => 'Log In',
    'errors' => [
        'email' => "Email or password is incorrect",
    ]
]);