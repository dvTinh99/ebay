<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class OrderRepository implements BaseRepository
{
    public function getModel()
    {
        return Order::class;
    }
}