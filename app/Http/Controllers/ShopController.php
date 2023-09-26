<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\ShopRepository;
use App\Models\Shop;

class ShopController extends Controller
{

    public $ShopRepo;

    public function __construct(ShopRepository $ShopRepo) {
        $this->ShopRepo = $ShopRepo;
    }

    public function detail(Request $request) {
        return $this->sendJsonResponse($this->ShopRepo->find($request->id), 'success');
    }

    public function getAll() {
        return $this->sendJsonResponse($this->ShopRepo->getAll(), 'success');
    }

    public function myShop() {
        return $this->sendJsonResponse($this->ShopRepo->myShop(), 'success');
    }

    public function create(Request $request) {
        if ($request->user_id) {
            $Shop = User::find($request->user_id)->Shop;
        } else {
            $user = Auth::user();
            $Shop = $user->Shop;
            $request->request->add(['user_id' => $user->id]);
        }
        if ($Shop) {
            $this->ShopRepo->update($Shop->id, $request->all());
            return $this->sendJsonResponse($Shop, 'success');
        }
        $Shop = $this->ShopRepo->create($request->all());
        if ($Shop) {
            return $this->sendJsonResponse($Shop, 'success');
        }
        return $this->sendJsonError('cant create', 300);
    }

    public function update(Request $request) {
        if ($request->id) {
            $id = $request->id;
        }
        if ($request->user_id) {
            $id = Shop::where('user_id', $request->user_id)->first()->id;
        }
        $order = $this->ShopRepo->update($id, $request->all());
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError("order not found", 404);
    }

    public function delete(Request $request) {
        $id = $request->id;
        $order = $this->ShopRepo->delete($id);
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }
}
