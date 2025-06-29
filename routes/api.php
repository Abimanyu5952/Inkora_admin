<?php
use App\Http\Controllers\Auth\JwtRegisterController;
use App\Http\Controllers\Auth\JwtLoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::post('/register', [JwtRegisterController::class, 'register']);
Route::post('/login', [JwtLoginController::class, 'login']);

// List all products
Route::get('/products', [ProductController::class, 'index']);

// Show single product
Route::get('/products/{product}', [ProductController::class, 'show']);

// Create product (admin only, protect with middleware)
Route::middleware('auth:api')->post('/products', [ProductController::class, 'store']);

// Update product (admin only)
Route::middleware('auth:api')->put('/products/{product}', [ProductController::class, 'update']);

// Delete product (admin only)
Route::middleware('auth:api')->delete('/products/{product}', [ProductController::class, 'destroy']);

// View cart (for authenticated user)
Route::middleware('auth:api')->get('/cart', [CartController::class, 'index']);

// Add to cart
Route::middleware('auth:api')->post('/cart/add', [CartController::class, 'add']);

// Remove from cart (optional)
Route::middleware('auth:api')->post('/cart/remove', [CartController::class, 'remove']);