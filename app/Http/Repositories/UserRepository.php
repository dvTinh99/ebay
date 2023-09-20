<?php

namespace App\Http\Repositories;

use App\Models\User;
use App\Http\Repositories\BaseRepository;
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
}
