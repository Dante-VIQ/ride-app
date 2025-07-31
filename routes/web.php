<?php

use App\Livewire\AboutCard;
use App\Livewire\Dashboard;
use App\Livewire\ServiceCard;
use App\Livewire\AnalyticsView;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;

Route::view('/', 'welcome');
// Route::middleware(['role:user'])->group(function () {
    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');
    Route::get('/all-services', ServiceCard::class);
    Route::get('/all-about', AboutCard::class);
 Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
// });

Route::get('/home', [AdminController::class, 'index'])->name('home');
// Admin routes
// Route::prefix('admin')->middleware(['role:admin'])->group(function () {
    Route::resource('abouts', AboutController::class);
    Route::resource('services', ServiceController::class);

    // Appointment requests admin view
    Route::get('/requests', [RequestController::class, 'index'])->name('admin.requests');
// });

require __DIR__ . '/auth.php';
