<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::post('/products/buy/{id}', [OrderController::class, 'buy'])->middleware('auth')->name('products.buy');
});

Route::get('/products', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/detail/{id}', [ProductController::class, 'showDetail'])->name('products.showDetail');

//this router part is created to display the interface
//will change after the corresponding controller is created
Route::view('/index', 'blade.index')->name('index');
Route::view('/accesPay', 'blade.accesPay')->name('accesPay');
Route::view('/accessories', 'blade.Acessories')->name('accessories');
Route::view('/bottom', 'blade.Bottom')->name('bottom');
Route::view('/cart', 'blade.Cart')->name('cart');
Route::view('/csdt', 'blade.CSDT')->name('csdt');
Route::view('/cstv', 'blade.CSTV')->name('cstv');
Route::view('/csvc', 'blade.CSVC')->name('csvc');
Route::view('/detail-product', 'blade.DetailProducts')->name('detail-product');
Route::view('/register-1', 'blade.Register')->name('register-1');
Route::view('/sale', 'blade.Sale')->name('sale');
Route::view('/top', 'blade.Top')->name('top');
Route::view('/payCart', 'blade.PayCart')->name('payCart');

require __DIR__.'/auth.php';