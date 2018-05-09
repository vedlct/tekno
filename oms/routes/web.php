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
use Illuminate\Http\Request;
//Route::get('/', function () {
//    return view('login');
//});
Route::get('/','Auth\LoginController@showLoginForm');


//Route::post('/logincheck','LoginController@validate_user');
//Route::get('/Home','LoginController@home');
Route::post('/insertreg','Registration@insertdata')->name('user.insert');

//Route::get('/Home', function () {
//    return view('Home');
//});
Route::get('/Home','JobController@home');

Route::post('/logincheck','LoginController@validate_user');
//Route::get('/Home','LoginController@home');
Route::get('/Logout','LoginController@logout');



Route::get('/profile', 'AdminController@profile')->name('adminprofile');
Route::get('/profile', 'UserController@profile')->name('userprofile');

Route::get('/Admin_profile', 'AdminController@profile')->name('adminprofile');
Route::get('/User_profile', 'UserController@profile')->name('userprofile');

//Job Requests
Route::get('/NewJobRequest', 'JobController@newjobrequest')->name('adminnewjobrequest');
Route::get('/job/{id}', 'JobController@getJob')->name('job.get');
Route::get('/deletejobreq/{id}','AdminController@jobreqdelete');
Route::get('/NewJobRequest_user', 'UserController@newjobrequest')->name('usernewjobrequest');
Route::post('/editJob', 'JobController@editJob')->name('job.edit');
Route::get('/AllJob','JobController@allJob')->name('job.all');
Route::post('/AllJob','JobController@jobDate')->name('job.data');

//Sales Job
Route::get('/sales','JobController@sales')->name('job.sale');
Route::post('/sales','JobController@salesData')->name('job.salesData');

//Change Potential Status
Route::post('/changepotential','JobController@changepotential')->name('job.changepotential');



Route::post('/insertnewjob', 'UserController@insertnewjob')->name('insertjobuser');



Route::get('/changejobstatus/{id}','AdminController@changejobstatus');
//Changing job status
Route::post('job/changestatus','JobController@changestatus')->name('job.changestatus');

Route::get('/NewUserRequest', 'AdminController@newuserrequest')->name('newuserrequest');
//Route::get('/changeuserstatus/{id}','AdminController@changeuserstatus');

Route::get('/JobOnGoing', 'AdminController@ongoingjob')->name('ongoingjob');
Route::get('/FinshedJob', 'AdminController@finshedjob')->name('finshedjob');


Route::get('/JobOnGoing_User', 'UserController@ongoingjob')->name('ongoingjob_user');
Route::get('/FinshedJob_User', 'UserController@finshedjob')->name('finshedjob_user');
Route::get('/PendingJob_User', 'UserController@pendingjob')->name('pendingjob_user');

Route::get('/changejob_user/{id}', 'UserController@changependingjob');
Route::post('/updatejob', 'UserController@updatejob');


Route::get('/ClientInfo', 'AdminController@viewclient')->name('clintinfo');
Route::get('/ClientInfo/{id}','AdminController@clientinfo');
Route::post('/ClientInfo', 'AdminController@updateclientinfo')->name('updateinfo');


Route::get('/changeservicestatus/{id}','AdminController@changeservicestatus');
Route::get('/deleteservice/{id}','AdminController@servicedelete');


Route::get('/PasswordChange', 'AdminController@passchange')->name('passchange');
Route::get('/changepassword/{id}','AdminController@changeuserpass');
Route::post('/passchange/{id}','AdminController@changepass');
Route::post('/changeUserStatus','AdminController@changeUserStatus')->name('changeUserStatus');


//Route::get('/message', 'MessageController@showAdminsms');
//Route::get('/messagebody/{client}', 'MessageController@showMessageBody');

Route::post('/inputsms/{client}', 'MessageController@inputsms');


Route::get('/message/{client1}', 'MessageController@showsmsuser')->name('usersms');
Route::post('/inputsms/{client1}', 'MessageController@inputsms')->name('insersms');


Route::get('/admin_message', 'MessageController@showAdminsms')->name('adminsms');


Route::post('/Comments', 'MessageController@jobcomment')->name('jobcomment');
Route::post('/Comments/{jobId}', 'MessageController@insert_job_comment')->name('insertjobcomment');


Route::get('/Message', 'MessageController@clientname')->name('getclientname');
Route::post('/NewMessage', 'MessageController@insertmessage')->name('newmessage');


Route::get('/getNotifAdmin', 'MessageController@getNotifAdmin');
Route::get('/getNotifUser', 'MessageController@getNotifUser');

Route::get('/getlivemsg', 'MessageController@getlivemsg');
Route::get('/getlivemsgdata', 'MessageController@getlivemsgdata');

Route::get('/user/create','Registration@create')->name('user.create');

Auth::routes();

Route::get('/home', 'JobController@home')->name('home');
//Route::get('/Home','JobController@home');
Route::post('/getNotification','MessageController@getNotification')->name('getNotification');


//Form
Route::view('/request-job','jobRequest')->name('job.request');
Route::post('/getJobForm','FormController@getForm')->name('getJobForm');
Route::post('/storeBrochure','FormController@storeBrochure')->name('storeBrochure');
Route::post('/storeWebsite','FormController@storeWebsite')->name('storeWebsite');
Route::post('/storeLeaflet','FormController@storeLeaflet')->name('storeLeaflet');
Route::post('/storeBanner','FormController@storeBanner')->name('storeBanner');
Route::post('/storeCorporate','FormController@storeCorporate')->name('storeCorporate');
Route::post('/storeLogo','FormController@storeLogo')->name('storeLogo');
Route::post('/storeVector','FormController@storeVector')->name('storeVector');

