<?php

use Illuminate\Http\Request;
use App\Http\Resources\cityResource as cityResource;
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

Route::apiResource('/ads','AdsController');

Route::apiResource('/state','StateController');

Route::apiResource('/city','CityController');


Route::apiResource('/category','CategoryController');

Route::get('/city', function () {
    return cityResource::collection(\App\Model\City::all());
});

Route::get('/cate', function () {
    return \App\Http\Resources\categoryResource::collection(\App\Model\Category::all());
});

Route::apiResource('/user','UserController');