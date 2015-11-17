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
use Illuminate\Support\Facades\Route;

Route::get('/',"RootController@create");

//Auth
Route::get('login','Auth\LoginController@create');
Route::post('login','Auth\LoginController@store');
Route::post('signup','Auth\SignUpController@store');
Route::get('/user/logout/{email}','Auth\LoginController@logout');
Route::get('/user/error',function(){
   return view("errors.503");
});
Route::get('/user/{email}','UserController@create');
Route::get('/article/{id}','ArticleController@create');
Route::post('/portal/create',"PortalController@store");
Route::get('/portal/show',"PortalController@create");
Route::get("/admin/",function(){
   return redirect()->action('Auth\LoginController@create');
});
Route::get("/portal/{id}","PortalController@create");
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


