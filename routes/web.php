<?php

use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\ShopController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\SellerProduct;
use App\Models\User;
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
    Route::get('/users/login', [ShopController::class, 'login']);
    Route::get('/users/registration', [ShopController::class, 'register']);
    Route::get('/detail', [ShopController::class, 'detail']);
    Route::get('/product/{id}', [ShopController::class, 'detailProduct']);
    Route::get('/categories', [ShopController::class, 'categories']);

    // pages
    Route::get('/term', [ShopController::class, 'term']);
    Route::get('/return-policy', [ShopController::class, 'returnPolicy']);
    Route::get('/support-policy', [ShopController::class, 'supportPolicy']);
    Route::get('/privacy-policy', [ShopController::class, 'privatePolicy']);
    Route::get('/compare', [ShopController::class, 'compare']);
    Route::get('/cart', [ShopController::class, 'cart']);
    Route::get('/shops/create', [ShopController::class, 'shopsCreate']);
    Route::get('/shops', [ShopController::class, 'shops']);
    Route::get('/search', [ShopController::class, 'search']);

    //cart
    Route::get('/cart-add', [ShopController::class, 'cartAdd']);
    Route::get('/cart-compare', [ShopController::class, 'cartCompare']);
    Route::get('/cart-remove', [ShopController::class, 'cartRemove']);
    Route::get('/cart-reload', [ShopController::class, 'cartReload']);
    Route::get('/compare/reset', [ShopController::class, 'compareReset']);

    //index 2 là page có sản phẩm trong giỏ hàng trên header
    Route::get('/index2', [ShopController::class, 'index2']);
});
Route::domain(env('DOMAIN_KHO','dev.btsdoors.com'))->group(function () {

    Route::group([
        'middleware' => 'auth'
    ], function () {
        Route::get('/', [UserController::class, 'dashboard']);
        Route::get('/dashboard', [UserController::class, 'dashboard']);
        Route::get('/order', [UserController::class, 'myOrder']);
        Route::get('/order-purchase', [UserController::class, 'myOrderPurchase']);
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
    Route::get('/detail-purchase/{id}', [OrderController::class, 'detailPurchase']);
    Route::get('/404', function () {
        return view('kho.maintenance' , ["page"=> "maintenance"]);
    });

    Route::get('/wallet-withdraw', function () {
        return view('kho.index' , ["page"=> "wallet-withdraw"]);
    });

    Route::post('/login', [UserController::class, 'login'])->name('login');

    Route::get('/craw', function () {
        $jsonData = file_get_contents(public_path().'/database/ebay/data.json');

        $response = str_replace(chr(0), '', $jsonData);
        $results = json_decode($response);
        foreach($results as $key => $item) {
            echo $key .'\n';
            $existSeller = User::where('name', 'like', '%'.$item->seller->name.'%')->first();
            if ($existSeller) {
                $user = $existSeller;
            } else {
                $sellerData = [
                    'email' => $key.'@gmail.com',
                    'address' => 'some where in this planet',
                    'name' => $item->seller->name,
                    'ref_of' => 0,
                    'ref_link' => quickRandom(),
                    'password' => bcrypt('123123')
                ];

                $user = User::create($sellerData);
            }

            $existBand = Brand::where('name', 'like', '%'. $item->brand->name.'%')->first();

            if ($existBand) {
                $brand = $existBand;
            } else {
                $brandData = [
                    "name" => $item->brand->name,
                    "image" => $item->brand->image,
                ];
                $brand = Brand::create($brandData);
            }

            $profit = rand(21, 99)  / 10;

            $product = [
                "name" => $item->name,
                "price" => $item->price,
                "warehouse_price" => $item->price - $profit,
                "profit" => $profit,
                "stock" => $item->stock,
                "description" => $item->content,
                "slug" => $item->slug,
                "category_id" => rand(2, 100),
                "brand_id" => $brand->id,
            ];
            $pro = Product::create($product);

            foreach($item->images as $image) {
                $imageData = [
                    'product_id' => $pro->id,
                    'image_link' => $image
                ];

                Image::create($imageData);
            }

            $sellerProductData = [
                'user_id' => $user->id,
                'product_id' => $pro->id,
            ];

            SellerProduct::create($sellerProductData);
        }
        echo 'done ne';
    });
});
