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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('categories',[\App\Http\Controllers\Api\categorycontroller::class, 'index']);
//Route::get('categories/{category}',[\App\Http\Controllers\Api\categorycontroller::class, 'show']);
//
//Route::get('categories/byId',[\App\Http\Controllers\Api\categorycontroller::class, 'show2']);
//Route::get('transactions',[\App\Http\Controllers\Api\transactioncontroller::class, 'index']);
//Route::get('categoriesv2',[\App\Http\Controllers\Api\categorycontroller::class, 'index']);
Route::resource('categories',\App\Http\Controllers\Api\categorycontroller::class);

