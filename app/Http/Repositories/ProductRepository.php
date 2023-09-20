<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository
{
    public function getModel()
    {
        return ProductProduct::class;
    }
}
