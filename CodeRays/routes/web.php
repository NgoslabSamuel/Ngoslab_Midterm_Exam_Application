<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Default Laravel welcome page
Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', [ProductController::class, 'index']);
