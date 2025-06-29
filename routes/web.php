<?php

use App\Http\Controllers\Auth\JwtLoginController;
use App\Http\Controllers\Auth\JwtRegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', fn() => redirect('/shop'));
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/{product}', [ProductController::class, 'show'])->name('product.detail');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');

Route::get('/order/confirmation/{order}', [OrderController::class, 'confirmation'])->name('order.confirmation');

Route::get('/brands', [BrandController::class, 'index'])->name('brands');
Route::get('/brands/{brand}', [BrandController::class, 'show'])->name('brand.detail');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/faq', 'faq')->name('faq');
Route::view('/privacy-policy', 'privacy')->name('privacy');
Route::view('/terms-of-service', 'terms')->name('terms');

Route::get('/login', [JwtLoginController::class, 'showLoginForm'])->name('jwt.login.form');
Route::post('/login', [JwtLoginController::class, 'login'])->name('jwt.login');

Route::get('/register', [JwtRegisterController::class, 'showRegisterForm'])->name('jwt.register.form');
Route::post('/register', [JwtRegisterController::class, 'register'])->name('jwt.register');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
});

Route::post('/api/login', [JwtLoginController::class, 'login']);
Route::post('/logout', [JwtLoginController::class, 'logout'])->name('jwt.logout');

Route::middleware(['auth:api', 'role:admin'])->group(function () {
    // admin-only routes
});

Route::middleware(['auth'])->get('/my-orders', [OrderController::class, 'myOrders'])->name('orders.my');


