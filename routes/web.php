<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//----Customer----
Route::get('/Addcustomer/{id}', [App\Http\Controllers\CustomerController::class, 'create']);
Route::post('/saveCustomer', [App\Http\Controllers\CustomerController::class, 'store'])->name('/saveCustomer');
Route::get('/editcustomer/{CustomerID}', [App\Http\Controllers\CustomerController::class, 'edit']);
Route::post('/editCustomer', [App\Http\Controllers\CustomerController::class, 'update'])->name('/editCustomer');
Route::get('/daletecustomer/{CustomerID}', [App\Http\Controllers\CustomerController::class, 'destroy']);
Route::get('/viewcustomer', [App\Http\Controllers\CustomerController::class, 'show']);

//-----Item-----
Route::get('/Additem/{id}', [App\Http\Controllers\ItemController::class, 'create']);
Route::post('/saveItem', [App\Http\Controllers\ItemController::class, 'store'])->name('/saveItem');
Route::get('/viewitem', [App\Http\Controllers\ItemController::class, 'show']);
Route::get('/editItem/{ItemID}', [App\Http\Controllers\ItemController::class, 'edit']);
Route::get('/deleteItem/{ItemID}', [App\Http\Controllers\ItemController::class, 'destroy']);
Route::post('/editItem', [App\Http\Controllers\ItemController::class, 'update'])->name('/saveItem');