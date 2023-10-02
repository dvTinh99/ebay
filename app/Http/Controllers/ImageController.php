<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;

class ImageController extends Controller
{

    function upload(Request $request) {
        if($request->images) {
            $rs = [];
            if ($request->type == 'avatar') {
                $path = 'database/avatar';
            } else {
                $path = 'database/identify';
            }
            for ($i = 0; $i < count($request->images); $i++) {
                $image = $request->images[$i];
                $name = $image->getClientOriginalName();
                $explode = explode('.', $name);
                $ext = end($explode);
                $name = Carbon::now()->timestamp.'.'.$ext;
                $storedPath = $path.'/'.$name;
                $image->move($path, $name);
                array_push($rs, $storedPath);
            }
        }
        return $this->sendJsonResponse($rs, 'success');
    }

}
