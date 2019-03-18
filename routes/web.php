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
  return view('auth.login');
});
Route::get('/contactus','ContactUsController@index'); //Home Page --Xame as Root page for content pages Switch
/**=================================
 * - Pages Content
 */
Route::get('content/service','ContactUsController@secondContent');
Route::get('content/service2','ContactUsController@thirdContent');
Route::get('content/service3','ContactUsController@forthContent');

/**===============================================
 * Other Pages
 */
Route::get('/contactus/email','ContactUsController@email'); //Send Email Page

Route::get('/contactus/phone','ContactUsController@phone'); //Phone calls Page

Route::post('/contactus/email/send','SendMailController@index'); //Fire Mail to the admin

Auth::routes();
Route::post('/contactus/phone','ContactUsController@caller');   //Store Callers to the database
Route::get('/home', 'HomeController@index')->name('home');
Route::get('contactus/admin','AdminPagesController@index');

/**=================================
 * - Configurations
 */

/**
 * For the Links
 */
Route::resource('/contactus/links','LinksController');

/**
 * For the Admin View Emails
 */
Route::resource('/contactus/emailMessages','ModifyEmailsController');

/**
 * For the Callers
 */

 Route::resource('/contactus/callers','CallersController');

 /**
  * For Services
  */
 Route::resource('/contactus/services','ServicesController');

 /**
  * For Problems 
  */

  Route::resource('/contactus/problems','ProblemsController');

/**
 * For Description
 */

 Route::resource('/contactus/descriptions','DescriptionsController');

 /** 
  * For Solutions
  */
  Route::resource('/contactus/solutions','SolutionsController');

  /**
   * For Countries
   */
  Route::resource('/contactus/countries','CountriesController');