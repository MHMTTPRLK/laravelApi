<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/testData',[App\Http\Controllers\dummpApiController::class,'testData']);
Route::get('/list',[App\Http\Controllers\DeviceController::class,'list']);
Route::get('/list/{id}',[App\Http\Controllers\DeviceController::class,'find']);

