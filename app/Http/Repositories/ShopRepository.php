<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopRepository extends BaseRepository
{
    public function getModel()
    {
        return Shop::class;
    }


    public function myShop($user_id) {
        return Shop::where('user_id', $user_id)->first();
    }

    public function findWithUserId($userId) {
        return Shop::where('user_id', $userId)->first();
    }
}
