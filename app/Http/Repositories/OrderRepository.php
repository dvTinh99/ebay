<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderRepository extends BaseRepository {
    public function getModel()
    {
        return Order::class;
    }

    public function orders($conditions = [], $perPage = null, $offset = null) {
        $query = $this->model->with(['seller', 'address', 'customer', 'products']);
        $this->wheres($query, $conditions);

        if (isset($perPage) && isset($offset)) {
            $query->offset($offset)->limit($perPage);
        }

        $orders = $query->get();
        return $this->transformOrders($orders);
    }

    private function transformOrders($orders){
        foreach ($orders as $key => $order) {
            $this->transformOrder($order);
        }
        return $orders;
    }

    private function transformOrder($order) {
        $orderItem = $order->orderItem;
        $order->products = $order->products->map(function ($item) use ($orderItem) {
            $quantity = $orderItem->where('product_id', $item->id)->first()->quantity;
            $item->quantity = $quantity;
            $images = $item->images->pluck('image_link');
            unset($item->images);
            $item->images = $images;
            return $item;
        });
        unset($order->orderItem);
        return $order;
    }

    public function detail($id) {
        $order = $this->model
            ->with(['seller', 'address', 'customer', 'products'])
            ->where('id', $id)->first();
        return $this->transformOrder($order);
    }

    public function myOrder() {
        $orders = $this->model->with(['seller', 'address', 'customer', 'products'])
            ->where('user_id', Auth::id())
            ->where('time_create', '<=', Carbon::now())
            ->get();
        return $this->transformOrders($orders);
    }
}
