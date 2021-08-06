<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
  public function store(Request $request)
  {
    $item = Food::create($request->all());
    // dd($item);
    return response()->json([
      'data' => $item
    ], 201);
  }
}