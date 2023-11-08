<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\SellerProductRepository;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;

class SellerProductController extends Controller
{
    public $sellerProductRepo;

    public function __construct(SellerProductRepository $sellerProductRepo) {
        $this->sellerProductRepo = $sellerProductRepo;
    }

    public function create(Request $request) {
        $ids = $request->product_ids;
        $userId = Auth::id();
        foreach ($ids as $id) {
            $isExist = $this->sellerProductRepo->checkExist($userId, $id);
            if (!$isExist) {
                $this->sellerProductRepo->create([
                    'user_id' => $userId,
                    'product_id' => $id,
                ]);
            }
        };
        return $this->sendJsonResponse(true, 'success');
    }

    public function addFull(Request $request) {
        $ids = Product::all()->pluck('id');
        $userId = Auth::id();
        foreach ($ids as $id) {
            $isExist = $this->sellerProductRepo->checkExist($userId, $id);
            if (!$isExist) {
                $this->sellerProductRepo->create([
                    'user_id' => $userId,
                    'product_id' => $id,
                ]);
            }
        };
        return $this->sendJsonResponse(true, 'success');
    }

    public function update(Request $request) {
        $id = $request->id;
        $order = $this->sellerProductRepo->update($id, $request->all());
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }

    public function delete(Request $request) {
        $id = $request->id;
        $userId = Auth::id();

        $product = $this->sellerProductRepo->remove($userId, $id);

        if ($product) {
            return $this->sendJsonResponse($product, 'success');
        }
        return $this->sendJsonError($product, 'error');
    }

}
