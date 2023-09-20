<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class OrderItemRepository implements BaseRepository
{
    public function getModel()
    {
        return OrderItem::class;
    }
}