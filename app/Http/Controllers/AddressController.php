<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\AddressRepository;
use App\Models\Address;

class AddressController extends Controller
{

    public $addressRepo;

    public function __construct(AddressRepository $addressRepo) {
        $this->addressRepo = $addressRepo;
    }

    public function detail(Request $request) {
        return $this->sendJsonResponse($this->addressRepo->find($request->id), 'success');
    }

    public function getAll() {
        return $this->sendJsonResponse($this->addressRepo->getAll(), 'success');
    }

    public function myAddress() {
        return $this->sendJsonResponse($this->addressRepo->myAddress(), 'success');
    }

    public function create(Request $request) {
        if (!$request->user_id) {
            $user = Auth::user();
            $request->request->add(['user_id' => $user->id]);
        }
        $address = $this->addressRepo->create($request->all());
        if ($address) {
            return $this->sendJsonResponse($address, 'success');
        }
        return $this->sendJsonError('cant create', 300);
    }

    public function update(Request $request) {
        if ($request->id) {
            $id = $request->id;
        }else if ($request->user_id) {
            $id = Address::where('user_id', $request->user_id)->first()->id;
        } else {
            $id = Address::where('user_id', Auth::id())->first()->id;
        }
        $order = $this->addressRepo->update($id, $request->all());
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError("order not found", 404);
    }

    public function delete(Request $request) {
        $id = $request->id;
        $order = $this->addressRepo->delete($id);
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }
}
