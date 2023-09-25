<?php

use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\ShopController;
use App\Models\Category;
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


Route::domain(env('DOMAIN_SHOP','shop.btsdoors.com'))->group(function () {
    Route::get('/', [ShopController::class, 'index']);
    Route::get('/categories', [ShopController::class, 'categories']);
});
Route::domain(env('DOMAIN_KHO','dev.btsdoors.com'))->group(function () {

    Route::group([
        'middleware' => 'auth'
    ], function () {
        Route::get('/', [UserController::class, 'dashboard']);
        Route::get('/dashboard', [UserController::class, 'dashboard']);
        Route::get('/order', [UserController::class, 'myOrder']);
        Route::get('/wallet-recharge', [UserController::class, 'myRecharge']);
        Route::get('/profile', function () {
            return view('kho.index' , ["page"=> "profile"]);
        });

        Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    });

    Route::get('/login', function () {
        return view('kho.login' , ["page"=> "login"]);
    });
    Route::get('/detail/{id}', [OrderController::class, 'detail']);
    Route::get('/404', function () {
        return view('kho.maintenance' , ["page"=> "maintenance"]);
    });

    Route::get('/wallet-withdraw', function () {
        return view('kho.index' , ["page"=> "wallet-withdraw"]);
    });

    Route::post('/login', [UserController::class, 'login'])->name('login');
});
