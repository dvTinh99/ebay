<?php

namespace App\Http\Controllers;

use App\Http\Repositories\SellerProductRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $order = $this->sellerProductRepo->create($request->all());
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
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
        $order = $this->sellerProductRepo->delete($id);
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }

}
