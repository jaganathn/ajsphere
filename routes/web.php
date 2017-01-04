<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Test', function () {
    return view('test');
});

//Web Routing
Route::get('/user/add_user', 'Web\user@add_user');
Route::get('/user/search_user', 'Web\user@search_user');
Route::get('/user/edit_user', 'Web\user@edit_user');
Route::get('/user/update_user', 'Web\user@update_user');

//MObile Routing
Route::get('/m/user/add_user', 'Services\Mobile\user@add_user');
Route::get('/m/user/search_user', 'Services\Mobile\user@search_user');
Route::get('/m/user/edit_user', 'Services\Mobile\user@edit_user');
Route::get('/m/user/update_user', 'Services\Mobile\user@update_user');
