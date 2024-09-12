<?php

use App\Livewire\NewsletterIndex;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/newsletter', NewsletterIndex::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
