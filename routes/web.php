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

Route::get('/club/{id}/{name}', 'Frontend\ClubController@club')->where(['id' => '[0-9]+'])->middleWare('storeClub');
Route::get('/clubs', 'Frontend\ClubController@clubs');
Route::post('clubs/search', 'Frontend\ClubController@search');


Route::get('/merchant/{id}/go', 'Frontend\MerchantController@go')->where(['id' => '[0-9]+'])->middleWare('merchantGo');
Route::get('/merchant/{id}/{name}', 'Frontend\MerchantController@merchant')->where(['id' => '[0-9]+']);
Route::get('/merchants', 'Frontend\MerchantController@merchants');
Route::get('merchants/autocompleteCategories', 'Frontend\MerchantController@autocompleteCategories');
Route::post('merchants/search', 'Frontend\MerchantController@search');

Route::get('/tutorial', 'Frontend\TutorialController@index');
Route::get('/about', 'Frontend\AboutController@index');
Route::get('/agb', 'Frontend\AgbController@index');
Route::get('/datenschutz', 'Frontend\DatenschutzController@index');
Route::get('/impressum', 'Frontend\ImpressumController@index');
Route::get('/neue-vereine-vorschlagen', 'Frontend\NeueVereineVorschlagenController@index');
Route::post('neue-vereine-vorschlagen', 'Frontend\NeueVereineVorschlagenController@store');
Route::get('/freunde-einladen', 'Frontend\FreundeEinladenController@index');


Route::get('/contact', 'Frontend\ContactController@index');
Route::post('contact', 'Frontend\ContactController@post');

Route::get('/cashback', 'Frontend\CashbackController@index');


/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'actions', 'namespace' => 'Actions', 'middleware' => 'auth'], function () {
    Route::any('fav-merchant', 'ActionsController@merchantFav');
    Route::any('fav-club', 'ActionsController@clubFav');
    Route::any('main-club', 'ActionsController@clubMain');
});

/*
|--------------------------------------------------------------------------
| JS
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'js'], function () {
    Route::get('clubs/searchGps/{lat}/{lng}', 'Frontend\ClubController@searchGps');
});

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
        Route::post('dashboard', 'DashboardController@ajaxListingSales');
        Route::post('dashboardGraph', 'DashboardController@ajaxGraph');
        Route::get('settings', 'SettingsController@settings');
        Route::post('settings', 'SettingsController@update');
        Route::post('invite', 'SettingsController@invite');
        Route::get('password', 'PasswordController@password');
        Route::post('password', 'PasswordController@update');
        Route::resource('favoritesClubs', 'FavoritesClubs');
        Route::resource('favoritesMerchants', 'FavoritesMerchants');
        Route::resource('referalUsers', 'ReferalUsers');
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

//удалить после отлидаки приложения, либо перенести в секцию администратора
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');