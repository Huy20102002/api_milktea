<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\ToppingController;
use App\Http\Controllers\UserController;
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
Route::apiResource('category',CategoryController::class);
Route::apiResource('product',ProductController::class);
Route::get('product/getname/{link_sp}',[ProductController::class,'getByname']);
Route::group(['prefix'=>'auth'],function(){
    Route::post('register',[UserController::class,'register']);
    Route::post('login',[UserController::class,'login']);
});
Route::apiResource('size',SizeController::class);
Route::apiResource('topping',ToppingController::class);
Route::apiResource('slide',SlideController::class);
Route::apiResource('carts',CartController::class);