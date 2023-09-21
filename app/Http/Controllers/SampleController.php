<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\SampleControllerRepository;

class SampleController extends Controller
{

    public $sampleRepo;

    public function __construct(SampleControllerRepository $sampleRepo) {
        $this->sampleRepo = $sampleRepo;
    }

    public function detail(Request $request) {
        return $this->sendJsonResponse($this->sampleRepo->detail($request->id), 'success');
    }

    public function getAll() {
        return $this->sendJsonResponse($this->sampleRepo->getAll(), 'success');
    }

    public function myOrder() {
        return $this->sendJsonResponse($this->sampleRepo->myOrder(), 'success');
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

    public function delete(Request $request) {
        if ($order) {
            return $this->sendJsonResponse($order, 'success');
        }
        return $this->sendJsonError($order, 'error');
    }
}
