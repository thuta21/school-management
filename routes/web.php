<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    //Route For Users
    Route::prefix('admin')->group(function()
    {
        Route::resource('users', UserController::class);
        Route::prefix('profile')->group(function()
        {
            Route::get('/view', [UserController::class, 'viewProfile'])->name('view-profile');
            Route::get('/edit', [UserController::class, 'editProfile'])->name('edit-profile');
        });
    });
});



