<?php

use App\Livewire\Dashboard;
use App\Livewire\AnalyticsView;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ServiceController;

Route::view('/', 'welcome');
Route::middleware(['role:user'])->group(function () {

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Public routes for services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/all', [ServiceController::class, 'all'])->name('all-services');


Route::get('/about', [AboutController::class, 'show'])->name('about.main');
Route::get('/abouts/{about}', [AboutController::class, 'show'])->name('show');

}):
// Admin routes
Route::middleware(['role:admin'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    Route::resource('abouts', AboutController::class);
    Route::resource('services', ServiceController::class)->names('admin.services');

    // Appointment requests admin view
    Route::get('/requests', [RequestController::class, 'index'])->name('admin.requests');
});

Route::post('/users/{user}/make-admin', [AdminController::class, 'makeAdmin'])
    ->middleware(['auth', 'can:manage-users']); // Protect this route

require __DIR__.'/auth.php';
