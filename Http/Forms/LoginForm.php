<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected array $errors = [];

    public function validate($email, $password): bool
    {
        if (!Validator::email($email)) {
            $this->errors['email'] = 'Please enter a valid email address';
        }

        if (!Validator::string($password)) {
            $this->errors['password'] = 'Please enter a valid password';
        }

        return empty($this->errors);
    }

    public function errors(): array
    {
        return $this->errors;
    }


}