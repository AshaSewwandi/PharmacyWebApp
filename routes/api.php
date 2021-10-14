<?php
use App\Http\Controllers\PriviledgeApiController;
use App\Http\Controllers\ItemApiController;
use App\Http\Controllers\RoleApiController;
use App\Http\Controllers\CustomerApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//----Customer-Api----
Route::get('/customer/show/{CustomerID}', [App\Http\Controllers\CustomerApiController::class, 'show']);
Route::get('/customers', [App\Http\Controllers\CustomerApiController::class, 'index']);
Route::post('/addcustomer', [App\Http\Controllers\CustomerApiController::class, 'store']);
Route::put('/customer/update/{CustomerID}', [App\Http\Controllers\CustomerApiController::class, 'update']);
Route::delete('/customer/delete/{CustomerID}', [App\Http\Controllers\CustomerApiController::class, 'delete']);

//----Role-Priviledges-Api----
Route::post('/addrole', [App\Http\Controllers\RoleApiController::class, 'store']);
Route::post('/addpriviledge', [App\Http\Controllers\PriviledgeApiController::class, 'store']);

//----Item-Api----
Route::get('/item/show/{ItemID}', [App\Http\Controllers\ItemApiController::class, 'show']);
Route::get('/items', [App\Http\Controllers\ItemApiController::class, 'index']);
Route::post('/additem', [App\Http\Controllers\ItemApiController::class, 'store']);
Route::put('/item/update/{ItemID}', [App\Http\Controllers\ItemApiController::class, 'update']);
Route::delete('/item/delete/{ItemID}', [App\Http\Controllers\ItemApiController::class, 'delete']);