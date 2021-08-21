<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
      $items = Course::all();
      return response()->json([
        'data' => $items
      ], 200);
    }
  
    public function store(Request $request)
    {
      $item = Course::create($request->all());
    //   dd($item);
      return response()->json([
        'data' => $item
      ], 201);
    }
  
  //   public function update(Request $request, Course course)
  //   {
  //     $update = [
  //       'name' => $request->name,
  //       'protein' => $request->protein
  //     ];
  //     $item = Course::where('id', course->id)->update($update);
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
  
    public function destroy(Course $course)
    {
      $item = Course::where('id', $course->id)->delete();
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

    public function show(Request $request)
  {
    $item = Course::where('user_id',$request->course)->get();
      return response()->json([
        'data' => $item
      ], 200);
  }
}
