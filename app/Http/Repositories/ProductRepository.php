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

    public function getAll()
    {
        $products = $this->model->with(['category'])->get();
        $products = $products->map(function ($item) {
            $images = $item->images->pluck('image_link');
            unset($item->images);
            $item->images = $images;
            return $item;
        });
        return $products;
    }
}
