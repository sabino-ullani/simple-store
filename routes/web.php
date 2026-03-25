<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Test route
Route::get('/', function () {
    return "Simple Store is working!";
});

// Products CRUD routes
Route::resource('products', ProductController::class);