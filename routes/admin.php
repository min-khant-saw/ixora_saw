<?php

use App\Http\Controllers\Admin\AddProduct\AddProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Dashboard\HomeController;
use App\Http\Controllers\Admin\Order\OrderController;
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

            Route::controller(ProductController::class)->group(function () {
                Route::get('/product/{productType?}/{sort?}', 'index')->name(
                    'product'
                );
                Route::delete('/product/{id}', 'delete')->name(
                    'product.delete'
                );
                Route::get('/edit/{id}', 'edit')->name('product.edit');
                Route::put('/update/{id}', 'update')->name('product.update');
            });

            Route::get('/order', [OrderController::class, 'index'])->name(
                'order'
            );

            Route::prefix('/application')
                ->name('application.')
                ->group(function () {
                    Route::get('/users', [
                        UserController::class,
                        'index',
                    ])->name('users');
                });

            Route::controller(AddProductController::class)
                ->name('add.')
                ->group(function () {
                    Route::get('/add-product', 'index')->name('product');
                    Route::post('/add-new-product', 'store')->name(
                        'new.product'
                    );
                });
        });
});
