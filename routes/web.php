<?php

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

Route::get('/', 'DashboardController@index')->name('home');

Route::get('/add-new-post', function () {
    return view('add-new-post');
})->name('new-post');

Route::get('/detail-posting',function(){
    return view('posting-detail');
})->name('detail-posting');

Route::get('/user-profile',function(){
    return view('user-profile');
})->name('user-profile');

Route::get('/facilities',function(){
    return view('facilities');
})->name('facilities');

Route::get('/detailComent',function(){
    return view('detailComent');
})->name('detailComent');


Route::resource('Posting','PostingController');
Route::get('/blog-posting','PostingController@index');