<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository
{
    public function getModel()
    {
        return Product::class;
    }

    public function getAll($perPage = 10, $offset = 1)
    {
        $products = $this->model->with(['category'])->skip($offset)->limit($perPage)->get();
        $products = $products->map(function ($item) {
            $images = $item->images->pluck('image_link');
            unset($item->images);
            $item->images = $images;
            return $item;
        });
        return $products;
    }

    public function countAll() {
        return $this->model->all()->count();
    }
}
