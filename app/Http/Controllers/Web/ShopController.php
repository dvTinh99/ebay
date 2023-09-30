<?php

namespace App\Http\Controllers\Web;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\OrderRepository;
use App\Http\Repositories\OrderItemRepository;
use App\Models\Product;
use Cart;
class ShopController extends Controller
{

    function cartAdd(Request $request) {
        $product = Product::find($request->product_id);
        $qty = $request->quantity;

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => $qty,
            'weight' => 1,
            'options' => ['image' => $product->images->first()->image_link]
        ]);
        return 'ok';
    }
    function cartRemove(Request $request) {
        Cart::remove($request->id);
        return 'ok';
    }

    function cartReload(Request $request) {
        $arrayProduct = [];
        $content = Cart::content();
        foreach($content as $value) {
            array_push($arrayProduct, $value);
        }
        $count = Cart::count();
        $total = Cart::priceTotal();
        return response()->json([
            'content' => $arrayProduct,
            'count' => $count,
            'total' => $total
        ], 200);
    }
    function index() {
        $categories = Category::with('children')->where('father_id', 0)->limit(11)->get();
        $products = Product::limit(11)->get();
        $productNoiBat = Product::skip(11)->limit(11)->get();
        $productBanChay = Product::skip(22)->limit(11)->get();
        return view('shop2.index', compact('categories', 'products', 'productNoiBat', 'productBanChay'));
    }

    function index2() {
        $categories = Category::with('children')->where('father_id', 0)->limit(11)->get();
        return view('shop2.index2', compact('categories'));
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
        $product = Product::find($id);
        // dd($product);
        $productBanChay = Product::skip(22)->limit(3)->get();
        $productTuongTu = Product::skip(44)->limit(11)->get();
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
        return view('shop2.page.search', compact('products', 'categories'));
    }

    function term() {
        return view('shop2.page.term');
    }

    function categories() {
        $categories = Category::with('children')->where('father_id', 0)->get();
        return view('shop2.page.category', compact('categories'));
    }
}
