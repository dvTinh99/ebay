<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{

    public $orderRepo;

    public function __construct(OrderRepository $orderRepo) {
        $this->orderRepo = $orderRepo;
    }

    public function create(Request $request) {
        $order = $this->orderRepo->create($request->all());
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
    }
}