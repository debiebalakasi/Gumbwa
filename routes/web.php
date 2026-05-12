<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;

// Homepage
Route::get('/', fn() => view('home'));

// Pages
Route::get('/about', fn() => view('about'));
Route::get('/services', fn() => view('services'));
Route::get('/products', fn() => view('products'));
Route::get('/agrotourism', fn() => view('agrotourism'));
Route::get('/news', fn() => view('news'));
Route::get('/contact', fn() => view('contact'));



// CART ACTIONS
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/clear-cart', function () {
    session()->forget('cart');
    return "Cart cleared";
});
Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::get('/store', [StoreController::class, 'index'])->name('store');
Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');


Route::get('/admin/orders', [OrderController::class, 'index']);
Route::post('/admin/orders/{id}/status', [OrderController::class, 'updateStatus'])
    ->name('admin.orders.updateStatus');
Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/admin/products', [ProductController::class, 'index']);
Route::post('/admin/products', [ProductController::class, 'store']);