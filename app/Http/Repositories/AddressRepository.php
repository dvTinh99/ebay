<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddressRepository extends BaseRepository
{
    public function getModel()
    {
        return Address::class;
    }


    public function myAddress() {
        return Auth::user()->address;
    }
}
