<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/student',[ApiController::class,'show']);
Route::post('/store',[ApiController::class,'store']);
Route::get('edit/{id}',[ApiController::class,'edit']);
Route::post('update',[ApiController::class,'update']);
Route::get('delete/{id}',[ApiController::class,'destroy']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
