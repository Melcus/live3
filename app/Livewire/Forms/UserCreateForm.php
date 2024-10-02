<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Actions\CreateUserAction;
use Flux\Flux;
use Illuminate\Validation\Rules\Password;
use Livewire\Form;

class UserCreateForm extends Form
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    public function getRules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }

    public function store(): void
    {
        $this->validate();

        (new CreateUserAction())->execute($this->name, $this->email, $this->password);

        Flux::toast('User created.');

        $this->reset();
    }
}
