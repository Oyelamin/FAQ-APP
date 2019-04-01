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
/**
 * Addresses
 */
$index= Change::index();  //Address to the first view page
$phone= Change::phone();  //Address to the phone call Page
$email= Change::email();  //Address to the Email page

/** Main Routes */
Route::get('/', function () {
  return redirect('/login');
});

Route::get('/'.$index,'ContactUsController@index'); //Home Page --Xame as Root page for content pages Switch
/**=================================
 * - Pages Content
 */
Route::get('content/service','ContactUsController@secondContent');
Route::get('content/service2','ContactUsController@thirdContent');
Route::get('content/service3','ContactUsController@forthContent');

/**===============================================
 * Other Pages
 */
Route::get('/'.$index.'/'.$email,'ContactUsController@email'); //Send Email Page
Route::resource('/'.$index.'/'.$phone,'PhonesController'); //Phone calls Page
Route::post('/contactus/email/send','SendMailController@index'); //Fire Mail to the admin
Auth::routes();
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

Route::get('/contactus/EmailMessgs','EmailsController@index');
Route::DELETE('/contactus/Emails/{email}','EmailsController@destroy');
Route::get('/contactus/Emails/reply','EmailsController@reply');
Route::post('/contactus/Emails/reply','SendMailController@reply');
Route::get('/contactus/Emails/attachment','EmailsController@showAttachment');

/**
 * All the Callers
 */

 Route::resource('/contactus/callers','CallersController');

 /**
  * Present Callers
  */
  Route::resource('/contactus/todayCallers','PresentCallersController');

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
  /**================================================
   * Settings Router 
   * ================================
   */
  //Home page URL Address
  Route::get('/contactus/settings/ChangeHomeAddress','AppAddressesController@change_index_page');
  Route::post('/contactus/settings/ChangeHomeAddress','AppAddressesController@store_index_page');

  //Phone page URL Address
  Route::get('/contactus/settings/ChangePhoneAddress','AppAddressesController@change_phone_page');
  Route::post('/contactus/settings/ChangePhoneAddress','AppAddressesController@store_phone_page');
  //Email page URL Address
  Route::get('/contactus/settings/ChangeEmailAddress','AppAddressesController@change_email_page');
  Route::post('/contactus/settings/ChangeEmailAddress','AppAddressesController@store_email_page');
  //Change the app name
  Route::get('/contactus/settings/ChangeAppName','AppNamesController@create');
  Route::post('/contactus/settings/ChangeAppName','AppNamesController@store');
  /**
   * For the Customer Prefer
   */
  Route::get('/contactus/CustomerPrefer/AddTollFreeNumber','CustomerPreferContactController@free_number');
  Route::post('/contactus/CustomerPrefer/AddTollFreeNumber','CustomerPreferContactController@store_free_number');
  //International Call
  Route::get('/contactus/CustomerPrefer/InternationalNumber','CustomerPreferContactController@international_number');
  Route::post('/contactus/CustomerPrefer/InternationalNumber','CustomerPreferContactController@store_international_number');