<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Auth;

class UserRepository implements BaseRepository
{
    public function getModel()
    {
        return User::class;
    }

    public function info() {
        return Auth::user();
    }
}