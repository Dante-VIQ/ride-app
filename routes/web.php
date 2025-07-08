<?php

use App\Livewire\AnalyticsView;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('about', 'about')
    ->name('about');

    Route::view('services', 'services')
    ->name('services');

    // Single middleware
Route::get('/admin', function () {
    return view('admin.admin');
})->middleware(['auth', 'role:admin']);

// Group middleware
Route::middleware(['auth', 'permission:edit_abouts'])->group(function () {
    Route::get('/abouts/{id}/edit', [AboutController::class, 'edit']);
});

Route::prefix('admin')->middleware(['auth', 'can:access-admin'])->group(function () {

    Route::get('/', AnalyticsView::class)->name('analytics');
    Route::resource('abouts', AboutController::class)
        ->names('abouts');
        Route::resource('services', App\Http\Controllers\ServiceController::class)
        ->names('services');
    // Route::get('/users', function () {
    //     return view('admin.users');
    // })->name('admin.users');
});

Route::post('/users/{user}/make-admin', [AdminController::class, 'makeAdmin'])
    ->middleware(['auth', 'can:manage-users']); // Protect this route
require __DIR__.'/auth.php';
