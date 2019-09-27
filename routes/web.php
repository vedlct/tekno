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

Route::view('/','welcome')->name('index');
Route::view('/request-job','jobRequest')->name('job.request');
Route::view('/about-us','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::view('/privacy','privacy')->name('privacy');
Route::view('/print-shop','printshop')->name('printing');




//Form
Route::post('/getJobForm','FormController@getForm')->name('getJobForm');
Route::post('/storeBrochure','FormController@storeBrochure')->name('storeBrochure');
Route::post('/storeWebsite','FormController@storeWebsite')->name('storeWebsite');
Route::post('/storeLeaflet','FormController@storeLeaflet')->name('storeLeaflet');
Route::post('/storeBanner','FormController@storeBanner')->name('storeBanner');
Route::post('/storeCorporate','FormController@storeCorporate')->name('storeCorporate');
Route::post('/storeLogo','FormController@storeLogo')->name('storeLogo');
Route::post('/storeVector','FormController@storeVector')->name('storeVector');


//Test
Route::get('test','TestController@index');

//Login

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
