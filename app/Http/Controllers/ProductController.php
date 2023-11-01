<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

        $conditions = [];
        if ($name) {
            $conditions[] = ['column' => 'name', 'operator' => 'like', 'value' => '%' . $name . '%'];
        }
        if (isset($published)) {
            $conditions[] = ['column' => 'published', 'operator' => '=', 'value' => $published];
        }
        if (isset($special)) {
            $conditions[] = ['column' => 'special', 'operator' => '=', 'value' => $special];
        }
        if ($rangePrice) {
            $conditions[] = ['column' => 'price', 'operator' => 'between', 'value' => explode(',', $rangePrice)];
        }
        if ($category) {
            $conditions[] = ['column' => 'category_id', 'operator' => '=', 'value' => $category];
        }
        if (isset($userId)) {
            $conditions[] = ['column' => 'user_id', 'operator' => '=', 'value' => $userId];
        }

        if (empty($userId)) {
            return $this->handleNonUserRequest($conditions, $offset, $perPage);
        }

        return $this->handleUserRequest($userId, $conditions, $offset, $perPage);
    }

    private function handleUserRequest($user_id, $conditions, $offset, $perPage) {
        $query = User::find($user_id)->products;
        $this->productRepo->wheres($query, $conditions);


        $products = (clone $query)->skip($offset)->take($perPage);
        $count = (clone $query)->count();

        return $this->sendJsonResponse(
            $this->productRepo->mapImageToProduct($products)->flatten(),
            'success',
            $count
        );
    }

    private function handleNonUserRequest($conditions, $offset, $perPage) {
        $query = Product::with(['category', 'images']);
        $this->productRepo->wheres($query, $conditions);

        $products = (clone $query)->skip($offset)->take($perPage)->get();
        $count = (clone $query)->count();

        return $this->sendJsonResponse(
            $this->productRepo->mapImageToProduct($products),
            'success',
            $count
        );
    }

    public function create(Request $request) {
        $product = $this->productRepo->create($request->all());

        // images default: []
        $images = $request->get('images', []);

//        protected $fillable = [
//            'product_id',
//            'image_link',
//            'user_id',
//            'image_type',
//        ];

        foreach ($images as $image) {
            $product->images()->create([
                'image_link' => $image,
                'image_type' => 'library'
            ]);
        }

        if ($product) {
            return $this->sendJsonResponse($product, 'success');
        }
        return $this->sendJsonError($product, 'error');
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
