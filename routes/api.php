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

Route::group(['prefix' => 'binarylogic-v1'], function(){
    Route::resource('/categories', App\Http\Controllers\Api\CategoryController::class);
    Route::resource('/tags', App\Http\Controllers\Api\TagController::class);
    Route::resource('/posts', App\Http\Controllers\Api\PostController::class);
    Route::get('/post/{slug}', [App\Http\Controllers\Api\WelcomeController::class, 'post_details']);
    Route::resource('/users', App\Http\Controllers\Api\UserController::class);
    Route::resource('/brands', App\Http\Controllers\Api\BrandController::class);
    Route::resource('/suppliers', App\Http\Controllers\Api\SupplierController::class);

    Route::get('/contact', [App\Http\Controllers\Api\ContactController::class, 'contact']);


});


