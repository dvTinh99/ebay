<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
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
        $perPage = $request->get('per_page', 10);
        $offset = $request->get('offset', 0);
        $name = $request->get('name');
        $published = $request->get('published');
        $special = $request->get('special');
        $rangePrice = $request->get('range_price');
        $category = $request->get('category');
        $userId = $request->get('user_id');

        if (empty($userId)) {
            return $this->handleNonUserRequest(compact(
                'rangePrice', 'name', 'special', 'published', 'offset', 'perPage', 'category'
            ));
        }

        return $this->handleUserRequest(compact(
            'userId', 'rangePrice', 'name', 'published', 'special', 'offset', 'perPage', 'category'
        ));
    }

    private function handleUserRequest($data) {
        $userId = $data['userId'];
        $rangePrice = $data['rangePrice'];
        $name = $data['name'];
        $published = $data['published'];
        $special = $data['special'];
        $offset = $data['offset'];
        $perPage = $data['perPage'];
        $category = $data['category'];

        $productsQuery = User::find($userId)->products
            ->when($rangePrice, function ($query) use ($rangePrice) {
                return $query->whereBetween('price', explode(',', $rangePrice));
            })
            ->when($category, function ($query) use ($category) {
                return $query->where('category_id', $category);
            })
            ->when($name, function ($query) use ($name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->when($published, function ($query) use ($published) {
                return $query->where('published', $published);
            })
            ->when($special, function ($query) use ($special) {
                return $query->where('special', $special);
            });

        $products = (clone $productsQuery)->skip($offset)->take($perPage);
        $count = (clone $productsQuery)->count();

        return $this->sendJsonResponse(
            $this->productRepo->mapImageToProduct($products)->flatten(),
            'success',
            $count
        );
    }

    private function handleNonUserRequest($data) {
        $rangePrice = $data['rangePrice'];
        $name = $data['name'];
        $published = $data['published'];
        $special = $data['special'];
        $offset = $data['offset'];
        $perPage = $data['perPage'];
        $category = $data['category'];

        $query = Product::with(['category', 'images'])
            ->when($rangePrice, function ($query) use ($rangePrice) {
                return $query->whereBetween('price', explode(',', $rangePrice));
            })
            ->when($category, function ($query) use ($category) {
                return $query->where('category_id', $category);
            })
            ->when($name, function ($query) use ($name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })->when($special, function ($query) use ($special) {
                return $query->where('special', $special);
            })->when($published, function ($query) use ($published) {
                return $query->where('published', $published);
            });
        $products = (clone $query)->skip($offset)->take($perPage)->get();
        $count = (clone $query)->count();

        return $this->sendJsonResponse(
            $this->productRepo->mapImageToProduct($products),
            'success',
            $count
        );
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
