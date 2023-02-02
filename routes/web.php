<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\user_role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user_role = User::find(1);
    $user_role = User::find(2)->user_role;
    //return $user_role;

    $user = user_role::find(1);
    $user = user_role::find(1)->user;
    //return $user;

    $users = User::all();
    //return $user;
    return view('welcome', compact('users'));
});
