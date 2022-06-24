<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;


Route::get('/',[PagesController::class, 'index'])->name('home');
Route::get('/shop',[ProductController::class, 'index'])->name('shop');
Route::get('/shop/{id}',[ProductController::class, 'show'])->name('product');

Route::get('/cart',[CartController::class, 'cart'])->name('cart');

Route::get('/add-to-cart/{id}',[CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/delete-from-cart/{id}',[CartController::class, 'delete'])->name('delete.from.cart');