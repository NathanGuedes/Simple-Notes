<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if (! $form->validate($email, $password)) {
    return view('session/create.view.php', [
        'heading' => 'Log In',
        'errors' => $form->errors()
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