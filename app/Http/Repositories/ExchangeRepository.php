<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\Exchange;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExchangeRepository extends BaseRepository
{
    public function getModel()
    {
        return Exchange::class;
    }

    public function detail($id) {
        return Exchange::find($id);
    }

    public function myExchange() {
        return Auth::user()->exchanges;
    }
}
