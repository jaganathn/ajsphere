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

Route::post('/traveller/manage_traveller', 'Web\traveller@manage_traveller');
Route::get('/traveller/manage_traveller', 'Web\traveller@manage_traveller');
Route::post('/conversation/manage_conversation', 'Web\conversation@manage_conversation');
Route::get('/conversation/manage_conversation', 'Web\conversation@manage_conversation');
Route::post('/employee/set_booking_amount_limit', 'Web\employee@set_booking_amount_limit');
Route::get('/employee/set_booking_amount_limit', 'Web\employee@set_booking_amount_limit');

//Route::get('/traveller/manage_traveller', function(){	return View('traveller/manage_traveller');});



//Mobile Routing
Route::get('/m/user/add_user', 'Services\Mobile\user@add_user');
Route::get('/m/user/search_user', 'Services\Mobile\user@search_user');
Route::get('/m/user/edit_user', 'Services\Mobile\user@edit_user');
Route::get('/m/user/update_user', 'Services\Mobile\user@update_user');


Route::post('m/traveller/manage_traveller', 'Services\Mobile\traveller@manage_traveller');
Route::get('m/traveller/manage_traveller', 'Services\Mobile\traveller@manage_traveller');
Route::post('m/conversation/manage_conversation', 'Services\Mobile\conversation@manage_conversation');
Route::get('m/conversation/manage_conversation', 'Services\Mobile\conversation@manage_conversation');
Route::post('m/employee/set_booking_amount_limit', 'Services\Mobile\employee@set_booking_amount_limit');
Route::get('m/employee/set_booking_amount_limit', 'Services\Mobile\employee@set_booking_amount_limit');
