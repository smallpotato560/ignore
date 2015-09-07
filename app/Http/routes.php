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

Route::get('/', function () {
    return view('welcome');
});
Route::match(['post','get'],'/manager/ajax/info','UserApi@managerInfo');
Route::match(['post','get'],'/manager/ajax/index','UserApi@managerIndex');
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function()
{
    Route::get('/','AdminHomeController@index');
    Route::get('/manager','AdminHomeController@manager');
    Route::get('/list','AdminHomeController@listpage');
});