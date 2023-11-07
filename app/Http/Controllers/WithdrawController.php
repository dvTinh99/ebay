<?php

namespace App\Http\Controllers;

use App\Models\Withdraw;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\SampleControllerRepository;
use App\Http\Repositories\WithdrawRepository;

class WithdrawController extends Controller
{

    public $withdrawRepo;

    public function __construct(WithdrawRepository $withdrawRepo) {
        $this->withdrawRepo = $withdrawRepo;
    }

    public function detail(Request $request) {
        return $this->sendJsonResponse($this->withdrawRepo->detail($request->id), 'success');
    }

    public function getAll() {
        return $this->sendJsonResponse($this->withdrawRepo->getAll(), 'success');
    }

    public function myWithdraw() {
        return $this->sendJsonResponse($this->withdrawRepo->myWithdraw(), 'success');
    }

    public function create(Request $request) {

        $custom_id= quickRandom();
        // loop until custom_id not exist
        while (Withdraw::where('custom_id', $custom_id)->exists()) {
            $custom_id = quickRandom();
        }

        // add custom_id to request
        $request->merge(['custom_id' => $custom_id]);

        $rs = $this->withdrawRepo->createWithDraw($request->all());
        if (isset($rs['success'])) {
            return $this->sendJsonError($rs['message'], 300);
        }
        return $this->sendJsonResponse($rs, 'success');
    }

    public function approveWithDraw(Request $request) {
        return $this->sendJsonResponse($this->withdrawRepo->approveWithDraw($request->id, $request->master_note), 'success');
    }

    public function rejectWithDraw(Request $request) {
        return $this->sendJsonResponse($this->withdrawRepo->rejectWithDraw($request->id, $request->master_note), 'success');
    }
}
