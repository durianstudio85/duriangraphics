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


Route::auth();

Route::get('/admin/login', 'Admin\AuthController@showLoginForm');
Route::post('/admin/login', 'Admin\AuthController@login');
Route::get('/admin/login', 'Admin\AuthController@logout');
Route::get('/admin/register', 'Admin\AuthController@showRegistration');
Route::post('/admin/register', 'Admin\AuthController@register');


Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@services');
Route::get('/pricing', 'HomeController@pricing');
Route::get('/contact', 'HomeController@contact');

Route::get('/categories', 'HomeController@categories');


Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/create', 'DashboardController@create');

Route::get('/profile', 'ProfileController@index');


Route::get('/downloads', 'DownloadController@index');
Route::get('/downloads/create', 'DownloadController@create');
Route::post('/downloads/create', 'DownloadController@store');


Route::get('/products/{cat}/{id}', 'ProductController@show');


Route::get('/getdownloads/{id}', 'DownloadController@getDownload');
