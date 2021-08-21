<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DailyController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/v1/user', UserController::class);

Route::apiResource('/v1/food', FoodController::class);

Route::apiResource('/v1/course', CourseController::class);

Route::apiResource('/v1/daily', DailyController::class);
