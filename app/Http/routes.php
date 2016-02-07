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
Route::get('/', [
    'as'   => 'home',
    'uses' => 'HomeController@index',
]);

Route::get('activate/{code}', [
    'as'   => 'activate',
    'uses' => 'Auth\AuthController@activateAccount',
]);

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

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('send', 'HomeController@sendEmail');
    Route::post('semnas', 'SemnasController@store');

    Route::get('user/upload', 'UserController@getUpload');
    Route::get('user/upload/redirect', 'UserController@redirectUpload');

    Route::get('/admin', 'AdminController@index');
});
