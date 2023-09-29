<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\ExchangeRepository;

class CustomerController extends Controller
{

    public $exchangeRepo;

    public function __construct(ExchangeRepository $exchangeRepo) {
        $this->exchangeRepo = $exchangeRepo;
    }

    public function detail(Request $request) {
        return $this->sendJsonResponse($this->exchangeRepo->detail($request->id), 'success');
    }

    public function getAll() {
        return $this->sendJsonResponse($this->exchangeRepo->getAll(), 'success');
    }

    public function myExchange() {
        return $this->sendJsonResponse($this->exchangeRepo->myExchange(), 'success');
    }

    public function create(Request $request) {
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }

    public function update(Request $request) {
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError("order not found", 404);
    }

    // public function delete(Request $request) {
    //     if ($order) {
    //         return $this->sendJsonResponse($order, 'success');
    //     }
    //     return $this->sendJsonError($order, 'error');
    // }
}
