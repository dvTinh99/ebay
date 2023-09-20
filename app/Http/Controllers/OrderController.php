<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\OrderRepository;
use App\Http\Repositories\OrderItemRepository;

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

    public function getAll() {
        return $this->sendJsonResponse($this->orderRepo->getAll(), 'success');
    }

    public function myOrder() {
        return $this->sendJsonResponse($this->orderRepo->myOrder(), 'success');
    }

    public function create(Request $request) {
        $order = $this->orderRepo->create($request->all());
        $products = $request->products;
        foreach ($products as $product) {
            $this->orderItemRepo->create([
                'order_id' => $order->id,
                'product_id' => $product["product_id"],
                'quantity' => $product["quantity"],
                // 'type' ,
            ]);
        }
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
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
