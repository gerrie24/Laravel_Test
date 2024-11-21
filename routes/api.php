<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskManagerController;
use App\Http\Controllers\Middleware;
use App\Http\Middleware\EnsureTokenIsValied;
use App\Http\Controllers\LoginController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('get-name', [invoiceController::class, 'jsonResponse']);

Route::get('index', [invoiceController::class, 'index']);
Route::post('store', [invoiceController::class, 'store']);
Route::get('show/{id}', [invoiceController::class, 'show']);
Route::put('update/{id}', [invoiceController::class, 'update']);
Route::delete('destroy/{id}', [invoiceController::class, 'destroy']);

Route::apiResource('users', UserController::class)->middleware('auth:sanctum');
Route::apiResource('TaskManager', TaskManagerController::class)->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);
Route::post('register', [LoginController::class, 'register']);
Route::post('create', [LoginController::class, 'create']);
