<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::apiResource('categories', CategoryController::class)->only(['index', 'show']);
Route::apiResource('products', ProductController::class)->only(['index', 'show']);

Route::prefix('admin')->group(function(){
    Route::apiResource('categories', CategoryController::class)->except(['index', 'show']);
    Route::apiResource('products', ProductController::class)->except(['index', 'show']);
});