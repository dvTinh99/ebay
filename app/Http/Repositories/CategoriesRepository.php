<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoriesRepository extends BaseRepository
{
    public function getModel()
    {
        return Category::class;
    }

    public function detail($id) {
        return Category::find($id);
    }

}
