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
//SISTEMA DE ROUTE EN LARAVEL
//Route::middleware('thougths:api')->get('/thougths', function (Request $request) {
    //return $request->thougths();
//});


//Route::get('post', 'RoutePostController@index');
//Route::get('post/{slug}', 'RoutePostController@show');
