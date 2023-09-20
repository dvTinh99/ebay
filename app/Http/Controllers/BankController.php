<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\BankRepository;
use App\Models\Bank;

class BankController extends Controller
{

    public $bankRepo;

    public function __construct(BankRepository $bankRepo) {
        $this->bankRepo = $bankRepo;
    }

    public function detail(Request $request) {
        return $this->sendJsonResponse($this->bankRepo->find($request->id), 'success');
    }

    public function getAll() {
        return $this->sendJsonResponse($this->bankRepo->getAll(), 'success');
    }

    public function myBank() {
        return $this->sendJsonResponse($this->bankRepo->myBank(), 'success');
    }

    public function create(Request $request) {
        $bank = User::find($request->user_id)->bank;
        if ($bank) {
            $this->bankRepo->update($bank->id, $request->all());
            return $this->sendJsonResponse($bank, 'success');
        }
        $bank = $this->bankRepo->create($request->all());
        if ($bank) {
            return $this->sendJsonResponse($bank, 'success');
        }
        return $this->sendJsonError('cant create', 300);
    }

    public function update(Request $request) {
        if ($request->id) {
            $id = $request->id;
        }
        if ($request->user_id) {
            $id = Bank::where('user_id', $request->user_id)->first()->id;
        }
        $order = $this->bankRepo->update($id, $request->all());
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError("order not found", 404);
    }

    public function delete(Request $request) {
        $id = $request->id;
        $order = $this->bankRepo->delete($id);
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }
}
