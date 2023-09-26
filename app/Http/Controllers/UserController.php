<?php

namespace App\Http\Controllers;

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

    public function detail(Request $request) {
        $user = $this->userRepo->find($request->id);
        if ($user) {
            return $this->sendJsonResponse($this->userRepo->find($request->id), 'success');
        }
        return $this->sendJsonError('User not found', 404);
    }

    public function update(Request $request) {
        if (!$request->id) {
            $request->request->add(['id' => Auth::id()]);
        }
        $user = $this->userRepo->find($request->id);
        if ($user) {
            return $this->sendJsonResponse($this->userRepo->update($request->id, $request->all()), 'success');
        }
        return $this->sendJsonError('User not found', 404);
    }

    public function info() {
        return $this->sendJsonResponse($this->userRepo->info(), 'success');
    }
    public function listSeller() {
        return $this->sendJsonResponse($this->userRepo->listSeller(), 'success');
    }

    public function myProduct() {
        return $this->sendJsonResponse($this->userRepo->myProduct(), 'success');
    }

    // public function addProduct(Request $request) {
    //     return $this->sendJsonResponse($this->userRepo->addProduct($request->product_ids), 'success');
    // }

    public function recharge(Request $request) {
        $user_id = $request->user_id;
        $amount = $request->amount;
        $method = $request->method;
        return $this->sendJsonResponse($this->userRepo->recharge($user_id, $amount, $method), 'success');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $userExist = User::where('email', $request->email)->exists();
        if ($userExist) {
            return $this->sendJsonError('User already exist', 300);
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
        $data['role'] = $request->role ?? 'seller';
        if ($request->ref_link) {
            $user = $this->userRepo->findWithRefCode($request->ref_link);
            if ($user) {
                $data['ref_of'] = $this->userRepo->findWithRefCode($request->ref_link)->id;
            }
        }
        $user = User::create($data);
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'message' => 'Authorization Granted',
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }
    public function login(Request $request)
    {
       $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Authorization failed'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'message' => 'Authorization Granted',
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    public function logout(Request $request) {
        Auth::user()->AauthAcessToken()->delete();
        return $this->sendJsonResponse('logout success', 'success');
    }


}
