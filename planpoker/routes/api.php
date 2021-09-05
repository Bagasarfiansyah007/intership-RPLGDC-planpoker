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

Route::post('/auth', function(Request $request){
    return $request->all();
});


Route::group([
    'prefix' => 'auth'
], function() {
    Route::post('register', 'Api\UserController@register');
    Route::post('login', 'Api\UserController@login');
    Route::post('logout', 'Api\UserController@logout')
        ->middleware('auth:api');
});

Route::get('login-user', 'Api\UserController@getUserLogin')->middleware('auth:api');

Route::post('create-room', 'Api\roomController@createRoom')->middleware('auth:api');
Route::put('edit-room/{id}', 'Api\roomController@edit')->middleware('auth:api');
Route::delete('delete-room', 'Api\roomController@deleteRoom')->middleware('auth:api');