<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get('/product', [ProductController::class, 'lists']);
Route::get('/product_detail', [ProductController::class, 'listById']);
Route::post('/create', [ProductController::class, 'store']);
Route::post('/update', [ProductController::class, 'update']);
Route::post('/delete', [ProductController::class, 'destroy']);
