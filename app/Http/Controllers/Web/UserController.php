<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;

class UserController extends Controller
{
    public $successStatus = 200;

    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */


    public $userRepo;
    public function __construct(UserRepository $userRepo) {
        $this->userRepo = $userRepo;
    }

    public function myOrder() {
        $page = 'order';
        $myOrder = $this->userRepo->myOrder()->paginate(5);
        return view('kho.index' , compact('page', 'myOrder'));
    }

    public function myOrderPurchase() {
        $page = 'order-purchase';
        $myOrderPurchase = $this->userRepo->myOrderPurchase()->paginate(5);
        return view('kho.index' , compact('page', 'myOrderPurchase'));
    }

    public function dashboard() {
        $page = 'dashboard';
        $dashboard = $this->userRepo->dashboard();
        return view('kho.index' , compact('page', 'dashboard'));
    }

    public function myRecharge() {
        $page = 'wallet-recharge';
        $recharge = $this->userRepo->myRecharge()->paginate(5);
        return view('kho.index' , compact('page', 'recharge'));
    }

    public function recharge(Request $request) {
        $user_id = $request->user_id;
        $amount = $request->amount;
        $method = $request->method;
        return $this->sendJsonResponse($this->userRepo->recharge($user_id, $amount, $method), 'success');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ])) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username or password incorrect');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }


}
