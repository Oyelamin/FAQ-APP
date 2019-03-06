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
Route::get('/contactus','ContactUsController@index');
Route::get('/contactus/show','ContactUsController@index');
Route::get('/contactus/email','ContactUsController@email');
Route::get('/contactus/phone','ContactUsController@phone');
Route::post('/contactus/email/send','SendMailController@index');