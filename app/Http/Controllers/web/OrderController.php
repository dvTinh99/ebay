<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\OrderRepository;
use App\Http\Repositories\OrderItemRepository;
use App\Models\Product;

class OrderController extends Controller
{

    public $orderRepo;
    public $orderItemRepo;

    public function __construct(OrderRepository $orderRepo, OrderItemRepository $orderItemRepo) {
        $this->orderRepo = $orderRepo;
        $this->orderItemRepo = $orderItemRepo;
    }

    public function detail($id) {
        $order = $this->orderRepo->detail($id);
        return view('kho.page.detail' , compact('order'));
    }
}
