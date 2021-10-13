<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/////
Route::get('/Addcustomer/{id}', [App\Http\Controllers\CustomerController::class, 'create']);
Route::post('/saveCustomer', [App\Http\Controllers\CustomerController::class, 'store'])->name('/saveCustomer');
Route::get('/editcustomer/{CustomerID}', [App\Http\Controllers\CustomerController::class, 'edit']);
Route::post('/editCustomer', [App\Http\Controllers\CustomerController::class, 'update'])->name('/editCustomer');
Route::get('/daletecustomer/{CustomerID}', [App\Http\Controllers\CustomerController::class, 'destroy']);
Route::get('/viewcustomer', [App\Http\Controllers\CustomerController::class, 'show']);

Route::get('/Additem/{id}', [App\Http\Controllers\ItemController::class, 'create']);