<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $item = User::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    public function show(Request $request)
    {
      $item = User::where('id',$request->user)->get();
        return response()->json([
          'data' => $item
        ], 200);
    }
}