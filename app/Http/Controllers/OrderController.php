<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
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

    public function detail(Request $request) {
        return $this->sendJsonResponse($this->orderRepo->detail($request->id), 'success');
    }

    public function orders(Request $request) {
        // $offset and $per_page
        $offset = $request->get('offset', 0);
        $per_page = $request->get('per_page', 10);
        $user_id = $request->get('user_id');
        $status = $request->get('status');
        $email = $request->get('email');
        $island = $request->get('island');

        $conditions = [];
        if ($user_id) {
            $conditions[] = ['column' => 'user_id', 'operator' => '=', 'value' => $user_id];
        }
        if ($status) {
            $conditions[] = ['column' => 'status', 'operator' => '=', 'value' => $status];
        }
        if ($email) {
            $conditions[] = [
                'column' => 'seller.email',
                'operator' => 'like',
                'value' =>  '%' . $email . '%'
            ];
        }

        if ($island) {
            $conditions[] = [
                'column' => 'time_create',
                'operator' => '<=',
                'value' =>  Carbon::now()
            ];
        }

        $count = $this->orderRepo->count($conditions);
        $orders = $this->orderRepo->orders($conditions, $per_page, $offset);


        return $this->sendJsonResponse($orders, 'success', $count);
    }

    public function myOrder() {
        return $this->sendJsonResponse($this->orderRepo->myOrder(), 'success');
    }

    public function create(Request $request) {
        $custom_id= quickRandom();
        // loop until custom_id not exist
        while (Order::where('custom_id', $custom_id)->exists()) {
            $custom_id = quickRandom();
        }

        // add custom_id to request
        $request->merge(['custom_id' => $custom_id]);
        $order = $this->orderRepo->create($request->all());
        $products = $request->products;
        $warehouse_price = 0.0;
        $profit = 0.0;
        $price = 0.0;
        foreach ($products as $product) {
            $pro = Product::find($product['product_id']);
            $warehouse_price += $pro->warehouse_price * $product['quantity'];
            $profit += $pro->profit * $product['quantity'];
            $price += $pro->price * $product['quantity'];
            $this->orderItemRepo->create([
                'order_id' => $order->id,
                'product_id' => $product["product_id"],
                'quantity' => $product["quantity"],
            ]);
        }
        $order->price = $price;
        $order->profit = $profit;
        $order->warehouse_price = $warehouse_price;
        $order->save();
        return $this->sendJsonResponse($order, 'success');
    }

    public function update(Request $request) {
        $id = $request->id;
        $order = $this->orderRepo->update($id, $request->all());
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError("order not found", 404);
    }

    public function delete(Request $request) {
        $id = $request->id;
        $order = $this->orderRepo->delete($id);
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }
}
