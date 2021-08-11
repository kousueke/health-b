<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{

  public function index()
  {
    $items = Food::all();
    return response()->json([
      'data' => $items
    ], 200);
  }

  public function store(Request $request)
  {
    $item = Food::create($request->all());
    // dd($item);
    return response()->json([
      'data' => $item
    ], 201);
  }

  public function update(Request $request, Food $food)
  {
    $update = [
      'name' => $request->name,
      'protein' => $request->protein
    ];
    $item = Food::where('id', $food->id)->update($update);
    if ($item) {
      return response()->json([
        'message' => 'Updated successfully',
      ], 200);
    } else {
      return response()->json([
        'message' => 'Not found',
      ], 404);
    }
  }

  public function destroy(Food $food)
  {
    $item = Food::where('id', $food->id)->delete();
    if ($item) {
      return response()->json([
        'message' => 'Deleted successfully',
      ], 200);
    } else {
      return response()->json([
        'message' => 'Not found',
      ], 404);
    }
  }

}