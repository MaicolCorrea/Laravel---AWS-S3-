<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProveAWS extends Controller
{
    public function uploadImage(Request $request)
    {
        $path = $request->file('image')->store('images', 's3');
        $url = \Storage::disk('s3')->url($path);
        return response()->json(['url' => $url]);
    }
}
