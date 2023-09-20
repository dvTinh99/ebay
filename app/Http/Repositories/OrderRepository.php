<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderRepository extends BaseRepository
{
    public function getModel()
    {
        return Order::class;
    }

    public function detail($id) {
        return Order::with('orderItem')->find($id);
    }

    public function myOrder() {
        return Order::with('orderItem')->where('user_id', Auth::id())->get();
    }
}
