<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class SellerProductRepository extends BaseRepository
{
    public function getModel()
    {
        return SellerProduct::class;
    }
}
