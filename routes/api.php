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

Route::post('send-sms','SmsController@store');
Route::post('verify-user','SmsController@verifyContact');

Route::post('posting','postingController@create');
Route::get('posting','postingController@index');
Route::put('/posting/{id}','postingController@update');
Route::get('/posting/{id}','postingController@destroy');



Route::resource('user','UserRestController');

