<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/product/create', [ProductController::class, 'create'])->name('create_product');
Route::post('/product/store', [ProductController::class, 'store'])->name('store_product');

Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('edit_product');
Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('update_product');

Route::delete('/product/delete/{product}', [ProductController::class, 'delete'])->name('delete_product');

