<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class SellerProductRepository implements BaseRepository
{
    public function getModel()
    {
        return SellerProduct::class;
    }
}