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
    Route::get('madc', 'HomeController@madc');
    Route::get('wdc', 'HomeController@wdc');
    Route::get('semnas', 'HomeController@semnas');
    
    Route::post('send', 'HomeController@sendEmail');
    Route::get('activate/{code}', 'Auth\AuthController@activateAccount');
    Route::get('register/success', 'Auth\AuthController@getMessagaPage');

    Route::auth();
    
    // Route::post('semnas', 'SemnasController@store');

    Route::get('user/upload', 'UserController@getUploadProposal');
    Route::get('user/upload/redirect', 'UserController@redirectUpload');
    Route::get('user', 'UserController@getAkun');
    Route::get('user/image', 'UserController@getImageUpload');
    // Route::post('user/imageUpload', 'UserController@postImageUpload');
    
    Route::get('/admin', 'AdminController@index');

    Route::get('/admin/madc', 'AdminController@getMadc');
    Route::get('/admin/wdc', 'AdminController@getWdc');
   
    Route::delete('/admin/team/delete/{team}', 'AdminController@deleteTeam');
    Route::post('/admin/aktivasi/{team}', 'AdminController@aktivasi');

    Route::post('/admin/team/edit/{team}', 'AdminController@editTeam');

    // Route::post('/admin/{type}/update/{id}', 'AdminController@update');
    Route::post('/admin/team/update/{team}', 'AdminController@updateTeam');


    Route::post('/admin/{type}/anggota/{team}', 'AdminController@getAnggota');

    Route::get('/admin/setting', 'AdminController@setting');

    Route::post('/admin/setting/post', 'AdminController@settingPost');

});
