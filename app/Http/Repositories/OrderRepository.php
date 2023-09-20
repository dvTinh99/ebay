<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class OrderRepository extends BaseRepository
{
    public function getModel()
    {
        return Order::class;
    }
}
