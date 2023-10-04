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
            $data = User::find($request->user_id)->products;
            foreach ($data as $key => $item) {
                if ($name && !str_contains($item->name, $name)) {
                    $data->forget($key);
                }
                if ($item->special != $special) {
                    $data->forget($key);
                }
                if ($item->published != $published) {
                    $data->forget($key);
                }
                $images = $item->images->pluck('image_link');
                unset($item->images);
                $item->images = $images;
            }
            // $data = $data->map(function ($item) use($name, $approve, $special){
            //     $images = $item->images->pluck('image_link');
            //     unset($item->images);
            //     $item->images = $images;
            //     return $item;
            // });
            return $this->sendJsonResponse($data, 'success', count($data));
        } else {
            $data = $this->productRepo->getAll($perPage, $offset, $name, $special, $published);
            $count = $data->count();
            return $this->sendJsonResponse($data->skip($offset)->take($perPage)->flatten(), 'success', $count);
        }
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
