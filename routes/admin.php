<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Dashboard\HomeController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\UserController;

Route::prefix('admin')->group(function () {
    Route::controller(LoginController::class)
        ->middleware('guest.admin')
        ->group(function () {
            Route::get('/login', 'index')->name('admin.login.view');
            Route::post('/login', 'login')->name('admin.login');
        });

    Route::prefix('/dashboard')
        ->middleware('admin.auth')
        ->name('admin.')
        ->group(function () {
            Route::get('/', [HomeController::class, 'index'])->name(
                'dashboard'
            );
            Route::get('/product', [ProductController::class, 'index'])->name(
                'product'
            );
            Route::prefix('/application')
                ->name('application.')
                ->group(function () {
                    Route::get('/users', [
                        UserController::class,
                        'index',
                    ])->name('users');
                });
        });
});
