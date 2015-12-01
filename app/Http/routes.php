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
use Illuminate\Support\Facades\Route;
//Root Domain
Route::group(['prefix'=>'/'],function(){
    Route::get('/',"RootController@create");
    Route::get('login','Auth\LoginController@create');
    Route::post('login','Auth\LoginController@store');
    Route::post('signup','Auth\SignUpController@store');
});
//User Domain
Route::group(['prefix'=>'/user/'],function(){
    Route::get('/{email}','UserController@create');
    Route::get('/logout/{email}','Auth\LoginController@logout');
    Route::get('/unlike/{Aid}','UserController@unlike');
});

//Article Domain
Route::group(['prefix'=>'/article'],function(){
    Route::get('/{id}','ArticleController@create');
});
//Portal Domain
Route::group(['prefix'=>'/portal'],function(){
    Route::get("/{id}","PortalController@create");
    Route::get('/show',"PortalController@create");
    Route::post('/create',"PortalController@store");
});
//Admin Domain
Route::group(['prefix'=>'/admin','namespace'=>'Admin','middleware'=>'acl'],function() {
    Route::get('/home','AdminHomeController@home');
    Route::post('/home','AdminHomeController@store');
    Route::post('/sss','AdminHomeController@create');
    Route::post('/sss/{id}','AdminHomeController@store');
    Route::post('/upload','AdminHomeController@uploadBanner');
});
//Error Domain
Route::group(['prefix'=>'/error'],function(){
    Route::get('503',function(){
        return view("errors.503");
    });
    Route::get('404',function(){
        return view("errors.404");
    });
});
//Ajax domain

Route::group(['prefix' => '/ajax/','middleware'=>'acl'], function () {
//    Admin Ajax
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
        Route::post('/home', 'AdminAjaxController@ajaxHome');
        Route::post('/setting', 'AdminAjaxController@setting');
        Route::patch('/publish', 'AdminAjaxController@ajaxPublish');
        Route::post('/help', 'AdminAjaxController@help');
        Route::post("/modify", "AdminAjaxController@ajaxModify");
        Route::get("/modify", "AdminAjaxController@ajaxModify");
        Route::patch('/setusr', 'AdminAjaxController@setusr');
        Route::patch('/setportal', 'AdminAjaxController@setportal');
        Route::get('/setportal', 'AdminAjaxController@setportal');
        Route::get('/setusr', 'AdminAjaxController@setusr');
        Route::patch('/muser', 'AdminAjaxController@modifyuser');
        Route::post('/save','AdminAjaxController@save');
        Route::patch('/mportal','AdminAjaxController@modifyPortal');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::any('like', 'UserLikeController@create');
    });
});

//test domain
Route::group(['prefix'=>'/test/','namespace'=>'Test'],function(){
    Route::get('article',"GlobalTestController@article");
    Route::get('paginate','GlobalTestController@paginate');
    Route::get('testpage','GlobalTestController@testpage');
});

