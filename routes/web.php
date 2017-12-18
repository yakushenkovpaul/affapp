<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a given Closure or controller and enjoy the fresh air.
|
*/

/*
|--------------------------------------------------------------------------
| Welcome Frontend
|--------------------------------------------------------------------------
*/

Route::get('/', 'Frontend\IndexController@index');

Route::get('/club/{name}', 'Frontend\ClubController@club');
Route::get('/clubs', 'Frontend\ClubController@clubs');
Route::post('clubs/search', 'Frontend\ClubController@search');

Route::get('/merchant/{name}', 'Frontend\MerchantController@shop');
Route::get('/merchants', 'Frontend\MerchantController@shops');
Route::get('merchants/autocompleteCategories', 'Frontend\MerchantController@autocompleteCategories');
Route::post('merchants/search', 'Frontend\MerchantController@search');

Route::get('/contact', 'Frontend\ContactController@contact');
Route::get('/tutorial', 'Frontend\TutorialController@tutorial');
Route::get('/cashback', 'Frontend\CashbackController@cashback');

/*
|--------------------------------------------------------------------------
| Login/ Logout/ Password
|--------------------------------------------------------------------------
*/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/*
|--------------------------------------------------------------------------
| Registration & Activation
|--------------------------------------------------------------------------
*/
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::get('register/autocompleteClubs', 'Auth\RegisterController@autocompleteClubs');

Route::get('activate/token/{token}', 'Auth\ActivateController@activate');
Route::group(['middleware' => ['auth']], function () {
    Route::get('activate', 'Auth\ActivateController@showActivate')->middleWare('redirectifActive');
    Route::get('activate/send-token', 'Auth\ActivateController@sendToken')->middleWare('redirectifActive');
});

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'active']], function () {

    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    Route::get('/users/switch-back', 'Admin\UserController@switchUserBack');

    /*
    |--------------------------------------------------------------------------
    | User
    |--------------------------------------------------------------------------
    */

    Route::group(['prefix' => 'user', 'namespace' => 'User'], function () {
        Route::get('dashboard', 'DashboardController@dashboard');
        Route::get('settings', 'SettingsController@settings');
        Route::post('settings', 'SettingsController@update');
        Route::get('password', 'PasswordController@password');
        Route::post('password', 'PasswordController@update');
    });

    /*
    |--------------------------------------------------------------------------
    | Admin
    |--------------------------------------------------------------------------
    */

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {

        Route::get('dashboard', 'DashboardController@index');

        /*
        |--------------------------------------------------------------------------
        | Merchant Routes
        |--------------------------------------------------------------------------
        */

        Route::resource('merchants', 'MerchantsController');
        Route::post('merchants/search', [
            'as' => 'merchants.search',
            'uses' => 'MerchantsController@search'
        ]);

        /*
        |--------------------------------------------------------------------------
        | Club Routes
        |--------------------------------------------------------------------------
        */

        Route::resource('clubs', 'ClubsController');
        Route::post('clubs/search', [
            'as' => 'clubs.search',
            'uses' => 'ClubsController@search'
        ]);

        /*
        |--------------------------------------------------------------------------
        | Sale Routes
        |--------------------------------------------------------------------------
        */

        Route::resource('sales', 'SalesController');
        Route::post('sales/search', [
            'as' => 'sales.search',
            'uses' => 'SalesController@search'
        ]);

        /*
        |--------------------------------------------------------------------------
        | Users
        |--------------------------------------------------------------------------
        */
        Route::resource('users', 'UserController', ['except' => ['create', 'show']]);
        Route::post('users/search', 'UserController@search');
        Route::get('users/search', 'UserController@index');
        Route::get('users/invite', 'UserController@getInvite');
        Route::get('users/switch/{id}', 'UserController@switchToUser');
        Route::post('users/invite', 'UserController@postInvite');

        /*
        |--------------------------------------------------------------------------
        | Roles
        |--------------------------------------------------------------------------
        */
        Route::resource('roles', 'RoleController', ['except' => ['show']]);
        Route::post('roles/search', 'RoleController@search');
        Route::get('roles/search', 'RoleController@index');
    });
});
