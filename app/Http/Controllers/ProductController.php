<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\ProductRepository;
use App\Http\Repositories\UserRepository;
use App\Models\Product;

class ProductController extends Controller
{

    public $productRepo;
    public $userRepo;

    public function __construct(ProductRepository $productRepo, UserRepository $userRepo) {
        $this->productRepo = $productRepo;
        $this->userRepo = $userRepo;
    }

    public function getAll(Request $request) {
        $perPage = $request->per_page ?? 10;
        $offset = $request->offset ?? 1;
        $name = $request->name ?? null;
        $published = $request->published ?? null;
        $special = $request->special ?? null;

        if ($request->user_id) {
            // laays cho user thif chir laays published = 1
            $data = User::find($request->user_id)->products
                ->when($name, function ($query) use ($name) {
                    return $query->where('name', 'like', '%' . $name . '%');
                })
                ->when($published, function ($query) use ($published) {
                    return $query->where('published', $published);
                })
                ->when($special, function ($query) use ($special) {
                    return $query->where('special', $special);
                })
                ->skip($offset)
                ->take($perPage);

            foreach ($data as $key => $item) {
                $images = $item->images->pluck('image_link');
                unset($item->images);
                $item->images = $images;
            }

            $count = User::find($request->user_id)->products
                ->when($name, function ($query) use ($name) {
                    return $query->where('name', 'like', '%' . $name . '%');
                })
                ->when($published, function ($query) use ($published) {
                    return $query->where('published', $published);
                })
                ->when($special, function ($query) use ($special) {
                    return $query->where('special', $special);
                })
                ->count();

        } else {
            $data = $this->productRepo->get($perPage, $offset, $name, $special, $published);
            $count = $this->productRepo->getCount($name, $special, $published);
        }
        return $this->sendJsonResponse($data->flatten(), 'success', $count);
    }

    public function create(Request $request) {
        $order = $this->productRepo->create($request->all());
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }

    public function update(Request $request) {
        $id = $request->id;
        $order = $this->productRepo->update($id, $request->all());
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }

    public function delete(Request $request) {
        $id = $request->id;
        $order = $this->productRepo->delete($id);
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }

}
