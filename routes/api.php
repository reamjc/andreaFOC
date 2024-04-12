<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories', [categoryController::class, 'index']);

Route::get('/categories/{id}', [categoryController::class, 'show']);

Route::put('/categories/{id}', [categoryController::class, 'update']);

Route::post('/categories', [categoryController::class, 'create']);