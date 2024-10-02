<?php

declare(strict_types=1);

use App\Livewire\Pages\Documents;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Inbox;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', Inbox::class)->name('inbox');
Route::get('/pricing', Documents::class)->name('documents');
