<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\User;

class CreateUserAction
{
    public function execute(string $name, string $email, string $password): User
    {
        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
    }
}
