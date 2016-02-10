<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');
    
    Route::post('send', 'HomeController@sendEmail');
    Route::get('activate/{code}', 'Auth\AuthController@activateAccount');

    Route::auth();
    
    Route::post('semnas', 'SemnasController@store');

    Route::get('user/upload', 'UserController@getUpload');
    Route::get('user/upload/redirect', 'UserController@redirectUpload');
    Route::get('user', 'UserController@getAkun');
    Route::get('user/image', 'UserController@getImageUpload');
    Route::post('user/imageUpload', 'UserController@postImageUpload');


    Route::get('/admin', 'AdminController@index');
});
