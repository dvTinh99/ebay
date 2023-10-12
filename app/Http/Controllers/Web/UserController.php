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

    public function toManager() {
        $user = Auth::user();
        $tokenResult = $user->createToken('Personal Access Token');
        switch ($user->role) {
            case 'customer' : {
                return redirect('/');
                break;
            }
            case 'seller':
            case 'master' : {
                return redirect(env('DOMAIN_MASTER', 'https://master.sellerhubvn.store') . '/?_token=' . $tokenResult->accessToken);
            }
        }
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

    public function loginShop(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ])) {
            $user = Auth::user();
            $tokenResult = $user->createToken('Personal Access Token');
            switch ($user->role) {
                case 'customer' : {
                    return redirect('/');
                }
                case 'seller':
                case 'master' : {
                    return redirect(env('DOMAIN_MASTER', 'https://master.sellerhubvn.store') . '/?_token=' . $tokenResult->accessToken);
                }
            }
        } else {
            return redirect()->back()->with('error', 'Sai Email hoặc mật khẩu');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function logoutShop(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    function register(Request $request) {
        // dd(Auth::check());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $userExist = User::where('email', $request->email)->exists();
        if ($userExist) {
            return redirect()->back();
        }
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $ramdomLinkRef = quickRandom();
        $isExist = true;
        while ($isExist) {
            $checkExist = User::where('ref_link', $ramdomLinkRef)->count();
            if ($checkExist == 0) {
                $isExist = false;
                break;
            }
        }
        $data['ref_link'] = $ramdomLinkRef;
        $data['role'] = 'seller'; // $request->role ??
        $data['address'] = '';

        // 79380
        $data['ref_of'] = 79380;
//        if ($request->ref_link) {
//            $user = $this->userRepo->findWithRefCode($request->ref_link);
//            if ($user) {
//                $data['ref_of'] = $this->userRepo->findWithRefCode($request->ref_link)->id;
//            }
//        }
        $user = User::create($data);
        if (Auth::attempt([
            'email' => $user->email,
            'password' => $request->password
        ])) {
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Username or password incorrect');
        }
    }


}
