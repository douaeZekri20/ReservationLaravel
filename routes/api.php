<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post("/signup",[App\Http\Controllers\HomeController::class,'signUp']);
Route::post("/signin",[App\Http\Controllers\HomeController::class,'signIn']);
Route:post("/reservation",[App\Http\Controllers\ReservationController::class,'sorte']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
