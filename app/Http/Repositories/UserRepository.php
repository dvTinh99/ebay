<?php

namespace App\Http\Repositories;

use App\Models\User;
use App\Models\Exchange;
use App\Http\Repositories\BaseRepository;
use App\Models\Order;
use App\Models\SellerProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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
        return User::with(['bank', 'shop'])->find($id);
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
        $wallet = Auth::user()->wallet;
        $orders = Order::where('user_id', Auth::id())
            ->where('time_create', '<=', Carbon::now());

        // Tổng tiền hàng
        $totalOrderAmount = round($orders->sum('price'), 2);

        // Lợi nhuận
        $totalOrderProfit = round($orders->sum('profit'), 2);

        // Số tiền chưa thành toán
        $totalUnpaidAmount = round($orders->where(function ($q) {
            $q->where('payment', 0)->orWhereNull('payment');
        })->sum('warehouse_price'), 2);

        // Tổng số đơn hàng chưa thanh toán
        $totalUnpaidOrder = count($orders->where(function ($q) {
            $q->where('payment', 0)->orWhereNull('payment');
        }));

        $totalViewsDay = Auth::user()->total_views_day;
        $totalViews = Auth::user()->total_views;
        $updateViewsAt = Auth::user()->update_views_at;
        if ($updateViewsAt == null || Carbon::parse($updateViewsAt)->diffInDays(Carbon::now()) > 0) {
            $incMount = rand(50, 150);
            // inc user.total_views_day, total_views and update_views_at
            $currentUser = User::where('id', Auth::id())->first();
            $currentUser->total_views_day = $incMount;
            $currentUser->total_views += $incMount;
            $currentUser->update_views_at = Carbon::now();
            $currentUser->save();

            $totalViewsDay = $incMount;
            $totalViews += $incMount;
        }

        $data = [
            'wallet' => $wallet,
            'total_order_amount' => $totalOrderAmount,
            'total_order_profit' => $totalOrderProfit,
            'total_unpaid_amount' => $totalUnpaidAmount,
            'total_unpaid_order' => $totalUnpaidOrder,

            'total_views_day' => $totalViewsDay,
            'total_views_total' => $totalViews
        ];
        return $data;
    }

}
