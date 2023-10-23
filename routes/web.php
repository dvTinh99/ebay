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

Route::domain(env('DOMAIN_SHOP','arfmartgo.info'))->group(function () {
    Route::get('/', [ShopController::class, 'index']);
    Route::get('/users/login', [ShopController::class, 'login']);
    Route::get('/users/registration', [ShopController::class, 'register']);
    Route::get('/detail', [ShopController::class, 'detail']);
    Route::get('/product/{id}', [ShopController::class, 'detailProduct']);
    Route::get('/categories', [ShopController::class, 'categories']);

    // đăng kí đăng nhập
    Route::post('/user/register', [UserController::class, 'register']);
    Route::get('/user/logout', [UserController::class, 'logoutShop']);
    Route::post('/user/login', [UserController::class, 'loginShop']);
    Route::get('/to-manager', [UserController::class, 'toManager']);


    // pages
    Route::get('/term', [ShopController::class, 'term']);
    Route::get('/return-policy', [ShopController::class, 'returnPolicy']);
    Route::get('/support-policy', [ShopController::class, 'supportPolicy']);
    Route::get('/privacy-policy', [ShopController::class, 'privatePolicy']);
    Route::get('/compare', [ShopController::class, 'compare']);
    Route::get('/cart', [ShopController::class, 'cart']);
    Route::get('/shops/create', [ShopController::class, 'shopsCreate']);
    Route::get('/shops', [ShopController::class, 'shops']);
    Route::get('/shops/{id}', [ShopController::class, 'shopsDetail']);
    Route::get('/search', [ShopController::class, 'search']);
    Route::get('/categories', [ShopController::class, 'categories']);
    Route::get('/category/{id}', [ShopController::class, 'category']);

    //cart
    Route::get('/cart-add', [ShopController::class, 'cartAdd']);
    Route::get('/cart-compare', [ShopController::class, 'cartCompare']);
    Route::get('/cart-remove', [ShopController::class, 'cartRemove']);
    Route::get('/cart-reload', [ShopController::class, 'cartReload']);
    Route::get('/compare/reset', [ShopController::class, 'compareReset']);


    // match 404 url and redirect to / page
    Route::get('/{any}', function () {
        return redirect('/');
    })->where('any', '.*');
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

        Route::post('/profile', [UserController::class, 'updateProfile']);
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
        $jsonFashionData = file_get_contents(public_path().'/database/ebay/fashion.json');
        $jsonTechData = file_get_contents(public_path().'/database/ebay/tech.json');

        $fashionResponse = str_replace(chr(0), '', $jsonFashionData);
        $techResponse = str_replace(chr(0), '', $jsonTechData);

        $fashionResults = json_decode($fashionResponse);
        $techResults = json_decode($techResponse);

        // merge 2 array
        $results = array_merge($fashionResults, $techResults);


        foreach($results as $key => $item) {

            // if $item->name.length > 255 => continue
            if (strlen($item->name) > 255) {
                continue;
            }

            // skip if $item->images.length == 0
            if (count($item->images) == 0) {
                continue;
            }

            echo $key .'\n';
            $existSeller = User::where('name', 'like', '%'.$item->seller->name.'%')->first();
            if ($existSeller) {
                $user = $existSeller;
            } else {
                // create email by convert $item->seller->name to email + random number
                $email = str_replace(' ', '', $item->seller->name);
                $email = strtolower($email);
                $email = $email . rand(1, 1000);

                $sellerData = [
                    'email' => $email.'@gmail.com',
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
                    //  "image" => $item->brand->image,
                ];
                $brand = Brand::create($brandData);
            }

            // category
            $existCategory = Category::where('name', 'like', '%'. $item->category->name.'%')->first();
            if ($existCategory) {
                $category = $existCategory;
            } else {
                $categoryData = [
                    "name" => $item->category->name,
                    "father_id" => 0,
                    "image" => "",
                ];
                $category = Category::create($categoryData);
            }

            $profitPercen = rand(15, 30) / 100;
            $price = $item->price;
            $profit = $price * $profitPercen;
            $wareHouse = $price - $profit;


            $product = [
                "name" => $item->name,
                "price" => $price,
                "warehouse_price" => $wareHouse,
                "profit" => $profit,
                "stock" => $item->stock,
                "description" => $item->content,
                "slug" => $item->slug,
                "category_id" => $category->id,
                "brand_id" => $brand->id,
                "special" => 1,
            ];
            $pro = Product::create($product);

            foreach($item->images as $image) {
                // if $image == null => continue
                if (is_null($image)) {
                    continue;
                }

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

    Route::get('/recalculate-order', [OrderController::class, 'recalculateOrder']);
});
