<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\SellerProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);



Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/user',
], function() {
    //master
    Route::get('/list-seller', [UserController::class, 'listSeller']);
    Route::post('/create-order', [OrderController::class, 'create']);


    //seller
    Route::get('/info', [UserController::class, 'info']);
    Route::get('/my-product', [UserController::class, 'myProduct']);
    Route::get('/add-product', [SellerProductController::class, 'create']);
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/order',
], function() {
    Route::get('/list-order', [OrderController::class, 'getAll']);
    Route::get('/my-order', [OrderController::class, 'myOrder']);
    Route::post('/create-order', [OrderController::class, 'create']);
    Route::post('/detail-order', [OrderController::class, 'detail']);
    Route::post('/update-order', [OrderController::class, 'update']);
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/bank',
], function() {
    Route::get('/list-bank', [BankController::class, 'getAll']);
    Route::get('/my-bank', [BankController::class, 'myBank']);
    Route::post('/create-bank', [BankController::class, 'create']);
    Route::post('/update-bank', [BankController::class, 'update']);
});
