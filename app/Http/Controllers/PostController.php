<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function post(Request $request)
    {
        $data = $request->all();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
}
