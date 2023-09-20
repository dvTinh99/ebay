<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class ProductRepository implements BaseRepository
{
    public function getModel()
    {
        return ProductProduct::class;
    }
}