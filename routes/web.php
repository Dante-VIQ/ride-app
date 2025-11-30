<?php

use App\Models\Employee;
use App\Livewire\AboutCard;
use App\Livewire\Dashboard;
use App\Livewire\ServiceCard;
use App\Livewire\AnalyticsView;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Employees\Index;
use App\Http\Controllers\ShowController;
use App\Livewire\Admin\Employees\Create;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Livewire\Admin\Employees\Profile;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin\UserRoleController;

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
Route::middleware(['auth', 'role:master|engineer'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    Route::get('/Admin/user/roles/index', [UserRoleController::class, 'index'])->name('admin.user.roles.index');
    Route::post('/Admin/roles/{user}', [UserRoleController::class, 'update'])->name('admin.roles.update');
    // Admin routes
    // Route::prefix('admin')->middleware(['role:admin'])->group(function () {
    Route::resource('admin/abouts', AboutController::class);
    Route::resource('admin/services', ServiceController::class);

    // Appointment requests admin view
    Route::get('/requests', [RequestController::class, 'index'])->name('admin.requests');

    // Employee List
    Route::get('admin/employees/index', Index::class)->name('admin.employees.index');

    // Create Employee
    Route::get('admin/employees/create', Create::class)->name('admin.employees.create');

    // Employee Profile (view + edit inline)
    Route::get('admin/employees/{employee}', Profile::class)->name('admin.employees.profile');

    Route::get('admin/employees', function () {
        return view('admin.employees');
    })->name('admin.employees');

    Route::get('admin/service', function () {
        return view('admin.service');
    })->name('admin.service');

    Route::get('admin/view', function () {
        return view('admin.view');
    })->name('admin.view');

    //     Route::get('admin/user_profile', function () {
    //     return view('admin.user_profile');
    // })->name('admin.user_profile');

Route::get('admin/user_profile/{id}', [ShowController::class, 'show'])->name('admin.user_profile');

Route::get('/admin/user_profile/{employee}', function (Employee $employee) {
    return view('admin.user_profile', compact('employee'));
});
    // web.php
    // Route::get('/admin/employees/{employeeId}', function ($employeeId) {
    //     return view('admin.employees/profile', compact('employeeId'));
    // })->name('admin.employees.profile');

    // });
});
require __DIR__ . '/auth.php';
