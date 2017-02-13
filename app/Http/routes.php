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

Route::group(['middleware' => ['web']], function () {
    //Login Routes...
    Route::get('/admin/login','Admin\AuthController@showLoginForm');
    Route::post('/admin/login','Admin\AuthController@login');
    Route::get('/admin/logout','Admin\AuthController@logout');

    // Registration Routes...
    Route::get('admin/register', 'Admin\AuthController@showRegistrationForm');
    Route::post('admin/register', 'Admin\AuthController@register');

    Route::get('/admin', 'AdminController@index');

    Route::get('/admin/products', 'AdminController@products');
    Route::get('/admin/products/create', 'AdminController@createProducts');
    Route::post('/admin/products/create', 'AdminController@storeProducts');
    Route::get('/admin/products/{id}/edit', 'AdminController@showProducts');
    Route::patch('/admin/products/{id}/edit', 'AdminController@updateProducts');

    Route::get('/admin/categories', 'Admin\CategoryController@index');
    Route::get('/admin/categories/create', 'Admin\CategoryController@create');
    Route::post('/admin/categories/create', 'Admin\CategoryController@store');

    Route::get('/admin/users', 'Admin\UserController@index');

    Route::get('/admin/options', 'Admin\OptionController@index');

});  


Route::auth();


Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@services');
Route::get('/pricing', 'HomeController@pricing');
Route::get('/contact', 'HomeController@contact');




Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/create', 'DashboardController@create');

Route::get('/profile', 'ProfileController@index');


Route::get('/downloads', 'DownloadController@index');
Route::get('/downloads/create', 'DownloadController@create');
Route::post('/downloads/create', 'DownloadController@store');

Route::get('/products/{cat}/{id}', 'ProductController@show');


Route::get('/getdownloads/{id}', 'DownloadController@getDownload');

Route::get('/categories', 'HomeController@categories');
Route::get('/categories/{cat}', 'HomeController@categories');


