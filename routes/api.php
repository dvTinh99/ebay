<?php

use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WithdrawController;

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
Route::get('/', function() {
    echo 'api';
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::get('user-info', [UserController::class, 'userInfo']);

Route::post('logout', [UserController::class, 'logout'])->middleware('auth:api');
Route::get('logout', [UserController::class, 'logout'])->middleware('auth:api');

Route::post('upload-images', [ImageController::class, 'uploadImages']);
Route::post('upload-image', [ImageController::class, 'uploadImage']);

Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/user',
], function() {
    // share
    Route::post('/update-password', [UserController::class, 'updatePassword']);


    //master
    Route::get('/list-seller', [UserController::class, 'listSeller']);
    Route::get('/detail-seller', [UserController::class, 'detail']);
    Route::post('/create-order', [OrderController::class, 'create']);
    Route::post('/update-seller', [UserController::class, 'update']);
    Route::post('/recharge', [UserController::class, 'recharge']);
    Route::get('/dashboard', [UserController::class, 'dashboard']);

    // delivery ranking
    Route::get('/delivery-ranking', [UserController::class, 'deliveryRanking']);


    //seller
    Route::get('/info', [UserController::class, 'info']);
    Route::get('/my-product', [UserController::class, 'myProduct']);
    Route::post('/add-product', [SellerProductController::class, 'create']);
    Route::post('/add-product-full', [SellerProductController::class, 'addFull']);
    Route::delete('/delete-product', [SellerProductController::class, 'delete']);
    Route::get('/my-exchange', [ExchangeController::class, 'myExchange']);
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/order',
], function() {
    Route::get('/list-order', [OrderController::class, 'orders']);
    Route::get('/my-order', [OrderController::class, 'myOrder']);
    Route::get('/detail-order', [OrderController::class, 'detail']);
    Route::post('/create-order', [OrderController::class, 'create']);
    Route::post('/update-order', [OrderController::class, 'update']);
    Route::delete('/delete-order', [OrderController::class, 'delete']);
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

Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/shop',
], function() {
    Route::get('/list-shop', [ShopController::class, 'getAll']);
    Route::get('/my-shop', [ShopController::class, 'myShop']);
    Route::get('/detail-user-shop', [ShopController::class, 'detailUserShop']);
    Route::post('/create-shop', [ShopController::class, 'create']);
    Route::post('/update-shop', [ShopController::class, 'update']);
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/address',
], function() {
    Route::get('/list-address', [AddressController::class, 'getAll']);
    Route::get('/my-address', [AddressController::class, 'myAddress']);
    Route::post('/create-address', [AddressController::class, 'create']);
    Route::post('/update-address', [AddressController::class, 'update']);
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/product',
], function() {
    Route::get('/list-product', [ProductController::class, 'getAll']);
    Route::get('/my-product', [ProductController::class, 'myProduct']);
    Route::post('/create-product', [ProductController::class, 'create']);
    Route::post('/update-product', [ProductController::class, 'update']);
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/category',
], function() {
    Route::get('/list-category', [CategoriesController::class, 'getAll']);
    Route::post('/create-category', [CategoriesController::class, 'create']);
    Route::post('/update-category', [CategoriesController::class, 'update']);
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/customer',
], function() {
    Route::get('/list-customer', [UserController::class, 'allCustomer']);
    Route::post('/create-customer', [CategoriesController::class, 'create']);
    Route::post('/update-customer', [CategoriesController::class, 'update']);
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/withdraw',
], function() {
    Route::post('/create-withdraw', [WithdrawController::class, 'create']);

    Route::post('/approve-withdraw', [WithdrawController::class, 'approveWithDraw']);
    Route::post('/reject-withdraw', [WithdrawController::class, 'rejectWithDraw']);

    Route::get('/list-withdraw', [WithdrawController::class, 'getAll']);
    Route::get('/my-withdraw', [WithdrawController::class, 'myWithdraw']);
    Route::get('/detail-withdraw', [WithdrawController::class, 'detail']);
});

// group comment, auth:api
Route::group([
    'middleware' => 'auth:api',
    'prefix' => '/comment',
], function() {
    Route::get('/list-comment', [CommentController::class, 'getAll']);
    Route::post('/create-comment', [CommentController::class, 'create']);
    Route::get('/detail-comment', [CommentController::class, 'getConversation']);
});
