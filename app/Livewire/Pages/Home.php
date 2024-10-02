<?php

declare(strict_types=1);

namespace App\Livewire\Pages;

use App\Livewire\Forms\UserCreateForm;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Home extends Component
{
    public UserCreateForm $userCreateForm;

    #[Title('Home')]
    public function render(): View
    {
        return view('livewire.pages.home');
    }

    public function save(): void
    {
        $this->userCreateForm->store();

        $this->dispatch('user-created');
    }
}
