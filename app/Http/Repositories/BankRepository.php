<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BankRepository extends BaseRepository
{
    public function getModel()
    {
        return Bank::class;
    }


    public function myBank() {
        return Bank::where('user_id', Auth::id())->first();
    }
}
