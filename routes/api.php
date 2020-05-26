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

Route::group(['prefix' => 'auth' ], function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
});

Route::group(['middleware' => 'api','prefix' => 'auth'], function () {
    Route::post('logout', 'AuthController@logout');
});

Route::get('currency', 'CurrencyController@index')->middleware('api');
