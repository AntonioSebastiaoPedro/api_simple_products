<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('products', [ProductController::class, 'index'])->name('products.all');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.one');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::post('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
