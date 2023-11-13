<?php

namespace App\Http\Controllers\Web;

use App\Models\Category;
use App\Models\SellerProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\OrderRepository;
use App\Http\Repositories\OrderItemRepository;
use App\Http\Repositories\UserRepository;
use App\Models\Product;
use Cart;
class ShopController extends Controller
{

    public $userRepo;

    function __construct(UserRepository $userRepo) {
        $this->userRepo = $userRepo;
    }
    function cartAdd(Request $request) {
        $product = Product::find($request->product_id);
        $qty = $request->quantity;

        // cart type = 1
        // compare type = 2
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => $qty,
            'weight' => 1,
            'options' => [
                'image' => $product->images->first()->image_link,
                'type' => 1
            ]
        ]);
        return 'ok';
    }

    function cartCompare(Request $request) {
        $product = Product::find($request->product_id);
        $qty = $request->quantity;

        // cart type = 1
        // compare type = 2
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => $qty,
            'weight' => 1,
            'options' => [
                'image' => $product->images->first()->image_link,
                'type' => 2,
                'category' => $product->category->name,
            ]
        ]);
        return getCountCompare();
    }

    function compareReset() {
        $content = Cart::content();
        foreach($content as $value) {
            \Log::debug('value', [$value]);
            if ($value->options['type'] != 1) {
                Cart::remove($value->rowId);
            }
        }
        return redirect('/');
    }
    function cartRemove(Request $request) {
        Cart::remove($request->id);
        return 'ok';
    }

    function cartReload(Request $request) {
        $arrayProduct = [];
        $content = Cart::content();
        $count = 0;
        foreach($content as $value) {
            if ($value->options['type'] == 1) {
                array_push($arrayProduct, $value);
                $count ++;
            }
        }
        $total = Cart::priceTotal();
        return response()->json([
            'content' => $arrayProduct,
            'count' => $count,
            'total' => $total
        ], 200);
    }

    function index() {
        $categories = Category::with('children')->where('father_id', 0)->limit(11)->get();

        $newProducts = SellerProduct::with([
            'product' => function($query) {
                $query->with('images');
            },
            'seller'
        ])->inRandomOrder()->limit(11)->get();
        $specialProducts = SellerProduct::with([
            'product' => function($query) {
                $query->with('images');
            },
            'seller'
        ])->inRandomOrder()->limit(11)->get();
        $bestSellerProducts = SellerProduct::with([
            'product' => function($query) {
                $query->with('images');
            },
            'seller'
        ])->inRandomOrder()->limit(11)->get();

        // map newProducts to item.product + seller
        $products = $newProducts->map(function($item) {
            $product = $item->product;
            $product->seller_product_id = $item->id;
            $product->seller = $item->seller;
            return $product;
        });
        $productNoiBat = $specialProducts->map(function($item) {
            $product = $item->product;
            $product->seller_product_id = $item->id;
            $product->seller = $item->seller;
            return $product;
        });
        $productBanChay = $bestSellerProducts->map(function($item) {
            $product = $item->product;
            $product->seller_product_id = $item->id;
            $product->seller = $item->seller;
            return $product;
        });

        return view('shop2.index', compact('categories', 'products', 'productNoiBat', 'productBanChay'));
    }

    function login() {
        return view('shop2.login');
    }

    function register() {
        return view('shop2.register');
    }


    function returnPolicy() {
        return view('shop2.page.return-policy');
    }

    function supportPolicy() {
        return view('shop2.page.support-policy');
    }

    function privatePolicy() {
        return view('shop2.page.private-policy');
    }

    function compare() {
        return view('shop2.page.compare');
    }

    function cart() {
        return view('shop2.page.cart');
    }

    function detail() {
        return view('shop2.detail');
    }
    function detailProduct($id) {
        $sellerProduct = SellerProduct::with([
            'product' => function($query) {
                $query->with('images');
            },
        ])->find($id);

        if ($sellerProduct) {
            $product = $sellerProduct->product;
            $product->seller_product_id = $sellerProduct->id;
            $product->seller = $sellerProduct->seller;

            $productBanChay = SellerProduct::with([
                'product' => function($query) {
                    $query->with('images');
                },
            ])->where('user_id', $sellerProduct->user_id)->inRandomOrder()->limit(11)->get();

            $productBanChay = $productBanChay->map(function($item) {
                $product = $item->product;
                $product->seller_product_id = $item->id;
                $product->seller = $item->seller;
                return $product;
            });
        } else {
            $product = Product::with('images')->find($id);
            $productBanChay = Product::with(['images'])->inRandomOrder()->limit(11)->get();
        }

        if (!$product) {
            return redirect('/');
        }



        // find $productTuongTu by category and different id cimpare to $product
        $productTuongTu = Product::with('images')
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->inRandomOrder()
            ->limit(11)
            ->get();

        return view('shop2.detail', compact('product', 'productBanChay', 'productTuongTu'));
    }

    function shopsCreate() {
        return view('shop2.page.shops-create');
    }

    function shops() {
        return view('shop2.page.shop');
    }

    function search(Request $request) {
        $keyWord = $request->keyword;
        $products = Product::where('name', 'like', '%' . $keyWord . '%')->paginate(9);
        $categories = Category::where('father_id', 0)->get();
        return view('shop2.page.search', compact('products', 'categories', 'keyWord'));
    }

    function term() {
        return view('shop2.page.term');
    }

    function categories() {
        $categories = Category::with('children')->where('father_id', 0)->get();
        return view('shop2.page.categories', compact('categories'));
    }

    function category($id) {
        $products = Product::where('category_id', $id)->paginate(10);
        $categories = Category::where('father_id', 0)->get();
        return view('shop2.page.search', compact('products', 'categories'));
    }
}
