<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class OrderItemRepository extends BaseRepository
{
    public function getModel()
    {
        return OrderItem::class;
    }
}
