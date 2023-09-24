<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Guest\LandingController;
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

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/contacts', function () {
        return view('contacts');
    })->name('contacts');

    Route::get('/product', function () {
        return view('pages.product');
    })->name('product');
});

Route::prefix('/product')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/fashion', 'fashion')->name('fashion');
        Route::get('/accessories', 'accessories')->name('accessories');
        Route::get('/home-decor', 'homeDecor')->name('homeDecor');
        Route::get('/education', 'education')->name('education');
        Route::get('/sale', 'sale')->name('sale');
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
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
});

require __DIR__ . '/auth.php';
