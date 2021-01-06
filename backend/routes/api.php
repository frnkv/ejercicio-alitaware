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

Route::middleware('guest')->group(function () {
    Route::get('payments', 'App\Http\Controllers\Api\PaymentsController@index');

    Route::get('users', 'App\Http\Controllers\Api\UsersController@index');

    Route::get('users/{user}', 'App\Http\Controllers\Api\UsersController@show');
});
