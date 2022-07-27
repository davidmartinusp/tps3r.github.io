<?php

use App\Http\Controllers\TPS3RController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\TokenController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('tps3r', TPS3RController::class);
Route::apiResource('user', UserController::class);
Route::apiResource('transportation', TransportationController::class);
Route::apiResource('admin', AdminController::class);


Route::post('tokens/create', [TokenController::class, 'create']);