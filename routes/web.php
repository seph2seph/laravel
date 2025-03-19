<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Constants\AppConstants;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $yearLevels = AppConstants::YEAR_LEVELS;
    return view('dashboard', compact('yearLevels'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::middleware(['auth', 'admin'])->group(function () {
  
    Route::get('admin/dashboard', [HomeController::class, 'index']);

    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');

    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('admin/products/store');
    
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin/products/destroy');

    
});
require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class, 'index']);
//Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth','admin']);// 
// Route::get('admin/dashboard', [LoginBoardController::class, 'index']);