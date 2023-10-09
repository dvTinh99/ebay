<?php

namespace App\Http\Controllers\Web;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\OrderRepository;
use App\Http\Repositories\OrderItemRepository;
use App\Models\Product;

class OrderController extends Controller
{

    public $orderRepo;
    public $orderItemRepo;

    public function __construct(OrderRepository $orderRepo, OrderItemRepository $orderItemRepo) {
        $this->orderRepo = $orderRepo;
        $this->orderItemRepo = $orderItemRepo;
    }

    public function detail($id) {
        $order = $this->orderRepo->detail($id);
        return view('kho.page.detail' , compact('order'));
    }

    public function detailPurchase($id) {
        $order = $this->orderRepo->detail($id);
        return view('kho.page.detail-purchase' , compact('order'));
    }

    public function recalculateOrder() {
        // get all orders and recalculate its $price, $profit, $warehouse_price
        $orders = Order::with('orderItem', 'products')->get();
        foreach ($orders as $order) {
            $order->price = 0.0;
            $order->profit = 0.0;
            $order->warehouse_price = 0.0;
            foreach ($order->orderItem as $item) {
                $order->price += $item->product->price * $item->quantity;
                $order->profit += $item->product->profit * $item->quantity;
                $order->warehouse_price += $item->product->warehouse_price * $item->quantity;
            }
            $order->save();
        }
    }
}
