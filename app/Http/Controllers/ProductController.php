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

class ProductController extends Controller
{

    public $productRepo;
    public $userRepo;

    public function __construct(ProductRepository $productRepo, UserRepository $userRepo) {
        $this->productRepo = $productRepo;
        $this->userRepo = $userRepo;
    }

    public function getAll(Request $request) {
        if ($request->user_id) {
            $data = User::find($request->user_id)->products;
            $data = $data->map(function ($item) {
                $images = $item->images->pluck('image_link');
                unset($item->images);
                $item->images = $images;
                return $item;
            });
            return $this->sendJsonResponse($data, 'success');
        } else {
            return $this->sendJsonResponse($this->productRepo->getAll(), 'success');
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
