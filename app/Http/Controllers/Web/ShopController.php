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

class ShopController extends Controller
{
    function index() {
        $categories = Category::with('children')->where('father_id', 0)->limit(11)->get();
        return view('shop2.index', compact('categories'));
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

    function shopsCreate() {
        return view('shop2.page.shops-create');
    }

    function term() {
        return view('shop2.page.term');
    }

    function categories() {
        $categories = Category::with('children')->where('father_id', 0)->get();
        return view('shop2.page.category', compact('categories'));
    }
}
