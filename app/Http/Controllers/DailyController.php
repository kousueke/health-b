<?php

namespace App\Http\Controllers;

use App\Models\Daily;
use Illuminate\Http\Request;

class DailyController extends Controller
{

  public function index()
  {
    $items = Daily::all();
    return response()->json([
      'data' => $items
    ], 200);
  }

  public function store(Request $request)
  {
    $item = Daily::create($request->all());
    // dd($item);
    return response()->json([
      'data' => $item
    ], 201);
  }

//   public function update(Request $request, Daily $daily)
//   {
//     $update = [
//       'name' => $request->name,
//       'protein' => $request->protein
//     ];
//     $item = Daily::where('id', $daily->id)->update($update);
//     if ($item) {
//       return response()->json([
//         'message' => 'Updated successfully',
//       ], 200);
//     } else {
//       return response()->json([
//         'message' => 'Not found',
//       ], 404);
//     }
//   }

  public function destroy(Daily $daily)
  {
    $item = Daily::where('id', $daily->id)->delete();
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