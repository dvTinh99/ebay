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

    public function get($perPage = 10, $offset = 1, $name = null, $special = null, $published = null) {
        $products = $this->model->with(['category'])
            ->when($name, function ($query) use ($name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })->when($special, function ($query) use ($special) {
                return $query->where('special', $special);
            })->when($published, function ($query) use ($published) {
                return $query->where('published', $published);
            })
            ->skip($offset)
            ->take($perPage)
            ->get();
        return $this->mapImageToProduct($products);
    }

    public function getAll($perPage = 10, $offset = 1, $name = null, $special = null, $published = null)
    {
        $products = $this->model->with(['category'])->get();
        return $this->mapImageToProduct($products, $name, $special, $published);
    }

    public function mapImageToProduct($products, $name = null, $special = null, $published = null) {

        foreach ($products as $key => $item) {
            if ($name && !str_contains(strtolower($item->name), strtolower($name))) {
                $products->forget($key);
            }
            if (!is_null($special) && $item->special != $special) {
                $products->forget($key);
            }
            if (!is_null($published) && $item->published != $published) {
                $products->forget($key);
            }
            $images = $item->images->pluck('image_link');
            unset($item->images);
            $item->images = $images;
        }
        // $products = $products->map(function ($item) {
        //     $images = $item->images->pluck('image_link');
        //     unset($item->images);
        //     $item->images = $images;
        //     return $item;
        // });
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
