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
    public function getModel()
    {
        return User::class;
    }

    public function info() {
        return Auth::user();
    }

    public function findWithRefCode($refCode) {
        return User::where('ref_link', $refCode)->first();
    }

    public function listSeller() {
        return User::where('ref_of', Auth::id())->orWhere('ref_of', Auth::user()->ref_link)->get();
    }

    public function myProduct() {
        return SellerProduct::where('user_id', Auth::id())->get();
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
        return Order::where('user_id', Auth::id());
    }

    public function myRecharge() {
        return Exchange::where('user_id', Auth::id());
    }

    public function dashboard() {
        $walletBalance = Auth::user()->wallet;
        $totalOrderAmount = Order::where('user_id', Auth::id())->sum('price');
        $totalOrderProfit = Order::where('user_id', Auth::id())->sum('profit');
        $totalUnpaidOrder = Order::where('user_id', Auth::id())->sum('warehouse_price');

        $data = [
            'wallet' => $walletBalance,
            'total_order_amount' => $totalOrderAmount,
            'total_order_profit' => $totalOrderProfit,
            'total_unpaid_order' => $totalUnpaidOrder
        ];
        return $data;
    }

}
