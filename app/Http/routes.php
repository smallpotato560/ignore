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
Route::get('/',"RootController@signIn");

//Auth
Route::get('login','Auth\LoginController@create');
Route::post('login','Auth\LoginController@store');
Route::post('signup','Auth\SignUpController@store');


//http://vhost/admin/
//if(@$username=='root')
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function()
{
    Route::get('/home','AdminHomeController@home');
    Route::get('/articles','AdminHomeController@ls');
    Route::get('/test','AdminHomeController@test');
    Route::get('/publish','AdminHomeController@publish');
    Route::post('/home','AdminHomeController@store');
    Route::get('/rich','AdminHomeController@rich');
    Route::any('/sss','AdminHomeController@store');
});

//Ajax admin
Route::group(['prefix'=>'ajax/admin','namespace'=>'Admin'],function()
{
    Route::post('/home','AdminAjaxController@ajaxHome');
    Route::post('/setting','AdminAjaxController@setting');
    Route::patch('/publish','AdminAjaxController@ajaxPublish');
    Route::post('/help','AdminAjaxController@help');
    Route::post("/modify","AdminAjaxController@ajaxModify");

});


