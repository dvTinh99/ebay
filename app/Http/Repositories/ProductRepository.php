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

    public function get(
        $name = null,
        $special = null,
        $published = null,
        $rangePrice = null
    ) {
        return $this->model->with(['category'])
            ->when($name, function ($query) use ($name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })->when($special, function ($query) use ($special) {
                return $query->where('special', $special);
            })->when($published, function ($query) use ($published) {
                return $query->where('published', $published);
            })
            ->when($rangePrice, function ($query) use ($rangePrice) {
                return $query->whereBetween('price', $rangePrice);
            });
    }

    public function getAll($perPage = 10, $offset = 1, $name = null, $special = null, $published = null)
    {
        $products = $this->model->with(['category'])->get();
        return $this->mapImageToProduct($products, $name, $special, $published);
    }

    public function mapImageToProduct($products) {

        foreach ($products as $item) {
            $images = $item->images->pluck('image_link');
            unset($item->images);
            $item->images = $images;
        }
        return $products;
    }

    public function getCount( $name = null, $special = null, $published = null) {
        return $this->model->when($name, function ($query) use ($name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })->when($special, function ($query) use ($special) {
            return $query->where('special', $special);
        })->when($published, function ($query) use ($published) {
            return $query->where('published', $published);
        })->count();
    }
}
