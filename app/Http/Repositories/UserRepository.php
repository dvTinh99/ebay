<?php

namespace App\Http\Repositories;

use App\Models\User;
use App\Http\Repositories\BaseRepository;
use App\Models\SellerProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository
{
    public function getModel()
    {
        return User::class;
    }

    public function info() {
        return Auth::user();
    }

    public function findWithRefCode($refCode) {
        return User::where('ref_link', $refCode)->first();
    }

    public function listSeller() {
        return User::where('ref_of', Auth::id())->get();
    }

    public function myProduct() {
        return SellerProduct::where('user_id', Auth::id())->get();
    }

}
