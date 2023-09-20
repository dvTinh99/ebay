<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\SellerProduct;
use Illuminate\Support\Facades\DB;

class SellerProductRepository extends BaseRepository
{
    public function getModel()
    {
        return SellerProduct::class;
    }

    public function checkExist($user_id, $product_id) {
        return SellerProduct::where('user_id',$user_id)->where('product_id',$product_id)->exists();
    }
}
