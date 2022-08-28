<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('products', [ProductController::class, 'index'])->name('products.all');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.one');
