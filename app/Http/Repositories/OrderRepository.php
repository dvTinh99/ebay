<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderRepository extends BaseRepository {
    public function getModel()
    {
        return Order::class;
    }

    public function orders($ref_link, $conditions = [], $perPage = null, $offset = null) {
        if ($ref_link) {
            $seller_id = User::where('ref_of', $ref_link)->pluck('id');
            $query = $this->model->whereIn('user_id', $seller_id)
                ->with(['seller', 'address', 'customer', 'products']);
        } else {
            $query = $this->model->with(['seller', 'address', 'customer', 'products']);
        }

        $this->wheres($query, $conditions);

        if (isset($perPage) && isset($offset)) {
            $query->offset($offset)->limit($perPage);
        }

        $orders = $query->orderBy('created_at', 'desc')->get();
        return $this->transformOrders($orders);
    }

    public function getCount($ref_link, $conditions = []) {
        if ($ref_link) {
            $seller_id = User::where('ref_of', $ref_link)->pluck('id');
            $query = $this->model->newQuery()->whereIn('user_id', $seller_id);
        } else {
            $query = $this->model->newQuery()->with('seller');
        }

        $this->wheres($query, $conditions);
        return $query->count();
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
