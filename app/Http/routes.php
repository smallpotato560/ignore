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
});

//Error Domain
Route::group(['prefox'=>'/error/'],function(){
    Route::get('/503',function(){
        return view("errors.503");
    });

});
//Article Domain
Route::group(['prefix'=>'/article/'],function(){
    Route::get('/{id}','ArticleController@create');
});

//Portal Domain
Route::group(['prefix'=>'portal'],function(){
    Route::get("/{id}","PortalController@create");
    Route::post('/create',"PortalController@store");
    Route::get('/show',"PortalController@create");
});

//Admin Domain
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'testauth'],function()
{
    Route::get("/",function(){
        return redirect()->action('Auth\LoginController@create');
    });
    Route::get('/home','AdminHomeController@home');
    Route::get('/publish','AdminHomeController@publish');
    Route::post('/home','AdminHomeController@store');
    Route::any('/sss','AdminHomeController@store');
});

//Ajax Domain
Route::group(['prefix'=>'/ajax/'],function()
{
//    Ajax Admin
    Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
        Route::post('/home','AdminAjaxController@ajaxHome');
        Route::post('/setting','AdminAjaxController@setting');
        Route::patch('/publish','AdminAjaxController@ajaxPublish');
        Route::post('/help','AdminAjaxController@help');
        Route::post("/modify","AdminAjaxController@ajaxModify");

    });
});

//test domain
Route::group(['prefix'=>'test/'],function(){
    Route::get('article',"TestController@article");
});

