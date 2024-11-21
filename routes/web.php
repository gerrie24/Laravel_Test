<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invoiceController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('invoices', function () {
//     return view('invoices');
// });

Route::get('invoices', [invoiceController::class, 'show']);
Route::post('invoices-create', [invoiceController::class, 'create']);

