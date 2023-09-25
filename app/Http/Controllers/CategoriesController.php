<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Repositories\CategoriesRepository;

class CategoriesController extends Controller
{

    public $categoriesRepo;

    public function __construct(CategoriesRepository $categoriesRepo) {
        $this->categoriesRepo = $categoriesRepo;
    }

    public function detail(Request $request) {
        return $this->sendJsonResponse($this->categoriesRepo->detail($request->id), 'success');
    }

    public function getAll() {
        return $this->sendJsonResponse($this->categoriesRepo->getAll(), 'success');
    }

    public function create(Request $request) {
        $cate = $this->categoriesRepo->create($request->all());
        if ($cate) {
            return $this->sendJsonResponse($cate, 'success');
        }
        return $this->sendJsonError($cate, 'error');
    }

    public function update(Request $request) {
        $cate = $this->categoriesRepo->update($request->id, $request->all());
        if ($cate) {
            return $this->sendJsonResponse($cate, 'success');
        }
        return $this->sendJsonError("order not found", 404);
    }

    public function delete(Request $request) {
        $cate = $this->categoriesRepo->delete($request->id);
        if ($cate) {
            return $this->sendJsonResponse($cate, 'success');
        }
        return $this->sendJsonError($cate, 'error');
    }
}
