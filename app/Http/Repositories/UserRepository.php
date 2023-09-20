<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class UserRepository implements BaseRepository
{
    public function getModel()
    {
        return User::class;
    }
}