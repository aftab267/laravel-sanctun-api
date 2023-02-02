<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\authcontroller;

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
//
//

//Public routes
// Route::resource('products',productcontroller::class);
Route::POST('/register',[authcontroller::class,'register']);
Route::POST('/login',[authcontroller::class,'login']);
Route::get('/products',[productcontroller::class,'index']);
Route::get('/products/{id}',[productcontroller::class,'show']);
Route::get('/products/search/{name}',[productcontroller::class,'search']);




//Protected Routes
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::POST('/products',[productcontroller::class,'store']);
    Route::PUT('/products/{id}',[productcontroller::class,'update']);
    Route::DELETE('/products/{id}',[productcontroller::class,'destroy']);
    Route::POST('/logout',[authcontroller::class,'logout']);

});



