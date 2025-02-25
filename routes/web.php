<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage'])->name('category.food-beverage');
    Route::get('beauty-health', [ProductController::class, 'beautyHealth'])->name('category.beauty-health');
    Route::get('home-care', [ProductController::class, 'homeCare'])->name('category.home-care');
    Route::get('baby-kid', [ProductController::class, 'babyKid'])->name('category.baby-kid');
});

Route::get('user/{id}/name/{name}', [UserController::class, 'show'])
    ->where(['id' => '[0-9]+', 'name' => '[a-zA-Z]+'])
    ->name('user.profile');

Route::get('/sales', [SalesController::class, 'index'])->name('sales');
