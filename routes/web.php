<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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


Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'home');
    Route::get('/p/{category}', 'category');
    Route::get('/p', 'search');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/detail/{product_id}', 'showDetail');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->middleware('guest');
    Route::post('/logout', 'logout')->middleware('auth');
});


Route::middleware(['auth'])->group(function(){
    Route::controller(CartController::class)->group(function () {
        Route::get('/cart', 'showCart');
        Route::get('/cart/remove/{id}', 'remove');
        Route::get('/cart/add/{id}', 'add');
        Route::post('/cart/update/{id}', 'update');
    });
    Route::view('/profile', 'profile');
});


Route::view('/login', 'login')->name('login')->middleware('guest');



Route::redirect('/', 'home', 301);
