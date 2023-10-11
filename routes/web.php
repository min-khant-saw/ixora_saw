<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return redirect()->to('/home');
    });

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/contacts', function () {
        return view('contacts');
    })->name('contacts');
});

Route::prefix('/product')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/fashion', 'fashion')->name('fashion');
        Route::get('/accessories', 'accessories')->name('accessories');
        Route::get('/home-decor', 'homeDecor')->name('homeDecor');
        Route::get('/education', 'education')->name('education');
        Route::get('/sale', 'sale')->name('sale');
        Route::get('/id={id}', 'singleProduct')->name('product');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name(
        'profile.edit'
    );
    Route::patch('/profile', [ProfileController::class, 'update'])->name(
        'profile.update'
    );
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name(
        'profile.destroy'
    );
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::group(
        [
            'controller' => CartController::class,
            'prefix' => '/cart',
        ],
        function () {
            Route::get('/', 'index')->name('cart');
            Route::post('/add-card/{id}', 'add')->name('cart.add');
            Route::delete('/delete-cart/{id}', 'delete')->name('cart.delete');
            Route::delete('/delete/{id}', 'deleteProduct')->name(
                'carts.delete'
            );
        }
    );
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
