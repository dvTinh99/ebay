<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ImageController extends Controller
{
    function uploadImages(Request $request) {
        $path = $request->has('type') && $request->type == 'avatar' ? 'database/avatar' : 'database/identify';
        $images = $this->upload($request->images, $path);
        return $this->sendJsonResponse($images, 'success');
    }

    function uploadImage(Request $request) {
        $path = 'database/avatar';
        $images = $this->upload([$request->image], $path);
        return $this->sendJsonResponse($images, 'success');
    }

    static function upload($images, $path) {
        $rs = [];
        foreach ($images as $image) {
            // random string suffix to prevent duplicate name
            $suffix = Carbon::now()->timestamp . '_' . rand(1000, 999999);
            $name = $suffix . '.' . pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $storedPath = $path . '/' . $name;
            $image->move($path, $name);
            $rs[] = $storedPath;
        }
        return $rs;
    }
}
