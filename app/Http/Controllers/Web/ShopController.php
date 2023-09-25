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
        $categories = Category::with('children')->where('father_id', 0)->get();
        return view('shop.index', compact('categories'));
    }

    function categories() {
        $categories = Category::with('children')->where('father_id', 0)->get();
        return view('shop.page.category', compact('categories'));
    }
}
