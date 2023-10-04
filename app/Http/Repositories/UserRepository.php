<?php

namespace App\Http\Repositories;

use App\Models\User;
use App\Models\Exchange;
use App\Http\Repositories\BaseRepository;
use App\Models\Order;
use App\Models\SellerProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository
{

    public $productRepository;

    public function __construct(ProductRepository $productRepository) {
        $this->productRepository = $productRepository;
    }
    public function getModel()
    {
        return User::class;
    }

    public function find($id) {
        return $this->model->with(['bank', 'shop'])->find($id);
    }

    public function info() {
        return Auth::user();
    }

    public function findWithRefCode($refCode) {
        return User::where('ref_link', $refCode)->first();
    }

    public function listSeller() {
        $users = User::with('bank')
        ->where('ref_of', Auth::id())
        ->orWhere('ref_of', Auth::user()->ref_link)
        ->get();

        $users = $users->map(function ($user){
            $totalProduct = $user->sellerProduct->count();
            $totalOrder = $user->orders->count();
            $totalPay = $user->orders->where('status', 2)->count();

            $result = [
                'total_product' => $totalProduct,
                'total_order' => $totalOrder,
                'total_pay' => $totalPay,
            ];

            $user->orderInfo = $result;
            return $user;
        });

        return $users;
    }

    public function myProduct($perPage = 10, $offset = 0, $name, $special, $published) {
        $products = Auth::user()->products;
        $products = $this->productRepository->mapImageToProduct($products,  $name, $special, $published);
        return $products;
    }

    public function totalMyProduct() {
        return Auth::user()->products->count();
    }

    public function recharge($user_id, $amount, $method) {
        $user = User::find($user_id);
        $user->wallet += $amount;
        $user->save();
        $data = [
            'user_id' => $user_id,
            'amount' => $amount,
            'method' => $method
        ];
        $recharge = Exchange::create($data);
        return $recharge;
    }

    public function myOrder() {
        return Order::where('user_id', Auth::id())->where('status', '<=', '1')->orWhereNull('status');
    }

    public function myOrderPurchase() {
        return Order::where('user_id', Auth::id())->where('status', '>', '1');
    }

    public function myRecharge() {
        return Exchange::where('user_id', Auth::id());
    }

    public function dashboard() {
        $walletBalance = Auth::user()->wallet;
        $totalOrderAmount = Order::where('user_id', Auth::id())->sum('price');
        $totalOrderProfit = Order::where('user_id', Auth::id())->sum('profit');
        $totalUnpaidOrder = Order::where('user_id', Auth::id())->sum('warehouse_price');

        $myProducts = $this->totalMyProduct();
        $totalProfit = $totalOrderProfit;
        $totalOrder = $totalOrderAmount;
        $totalViewsDay = 0;
        $totalViewsWeek = 0;
        $totalViewsMonth = 0;

        $data = [
            'wallet' => $walletBalance,
            'total_order_amount' => $totalOrderAmount,
            'total_order_profit' => $totalOrderProfit,
            'total_unpaid_order' => $totalUnpaidOrder,

            /////
            'my_products' => $myProducts,
            'total_profit' => $totalProfit,
            'total_order' => $totalOrder,
            'total_views_day' => $totalViewsDay,
            'total_views_week' => $totalViewsWeek,
            'total_views_month' => $totalViewsMonth,
        ];
        return $data;
    }

}
