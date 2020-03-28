<?php

use Illuminate\Http\Request;

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


Route::get('medellin/user', 'MedellinUserController@index');
Route::get('bogota/user', 'BogotaUserController@index');
Route::get('movement/user', 'UserMovementController@index');
Route::post('movement/user', 'UserMovementController@create');
Route::get('movement/user/{userMovement}', 'UserMovementController@find');

Route::get('test-broadcast', function () {
    broadcast(new \App\Events\UserMoventEvent(1, 2));
});