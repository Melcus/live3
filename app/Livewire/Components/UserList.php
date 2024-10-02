<?php

declare(strict_types=1);

namespace App\Livewire\Components;

use App\Models\User;
use Flux\Flux;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    #[Computed]
    #[On(['user-created', 'user-deleted'])]
    public function users(): LengthAwarePaginator
    {
        return User::paginate(2);
    }

    public function delete(int $userId): void
    {
        User::find($userId)?->delete();

        $this->dispatch('user-deleted');

        Flux::toast('User deleted successfully!.');
    }

    public function render(): View
    {
        return view('livewire.components.user-list');
    }
}
