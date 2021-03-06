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
//Route::get('/list/{id?}',[App\Http\Controllers\DeviceController::class,'list']);
Route::get('/list/{id}',[App\Http\Controllers\DeviceController::class,'find']);
Route::post('add',[App\Http\Controllers\DeviceController::class,'add']);
Route::put('device/update',[App\Http\Controllers\DeviceController::class,'update']);
Route::get('device/search/{name}',[App\Http\Controllers\DeviceController::class,'search']);
Route::delete('device/delete/{id}',[App\Http\Controllers\DeviceController::class,'delete']);
Route::post('device/save',[App\Http\Controllers\DeviceController::class,'testValidate']);

