<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//home page
Route::get('/', function () {
    return view('index');
});
Route::get('login',function(){
   // return view('admin/auth');
    dd(view('admin/auth')->render());
});

//http://vhost/admin/
//if(@$username=='root')
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function()
{
    Route::get('/home','AdminHomeController@home');
    Route::get('/test','AdminHomeController@test');
    Route::get('/publish','AdminHomeController@publish');
    Route::post('/home','AdminHomeController@store');
    Route::get('/rich','AdminHomeController@rich');
    Route::post('/sss','AdminHomeController@store');
});

//Ajax admin
Route::group(['prefix'=>'ajax/admin','namespace'=>'Admin'],function()
{
    Route::post('/home','AdminAjaxController@ajaxHome');
    Route::post('/setting','AdminAjaxController@setting');
    Route::any('/publish','AdminAjaxController@ajaxPublish');
    Route::post('/help','AdminAjaxController@help');
});
