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

Route::resource('user','UserRestController');
Route::post('login','UserRestController@mobileauthenticate');

Route::resource('posting','PostingRestController');
Route::get('bencana-alam','PostingRestController@showBencana');
Route::get('pertanian','PostingRestController@showPertanian');

Route::resource('comment','CommentRestController');
Route::get('comment-post/{id}','CommentRestController@showbyPost');

Route::resource('landmark','LandMarkRestController');
Route::get('kesehatan','LandMarkRestController@showKesehatan');
Route::get('penginapan','LandMarkRestController@showPenginapan');
Route::get('infopasar','LandMarkRestController@showInfoPasar');
Route::get('restoran','LandMarkRestController@showRestoran');