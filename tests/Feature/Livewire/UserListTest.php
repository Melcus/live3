<?php

declare(strict_types=1);

namespace Tests\Feature\Livewire;

use App\Livewire\Components\UserList;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class UserListTest extends TestCase
{
    use RefreshDatabase;

    public function testItRendersTheComponent(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => bcrypt('password'),
        ]);

        Livewire::test(UserList::class)
            ->assertSeeText("John Doe");
    }
}
