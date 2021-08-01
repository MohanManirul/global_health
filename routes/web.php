<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'Frontend\HomeController@index')->name('index');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// Admin Routes

Route::group(['prefix' => 'admin'] , function(){
	Route::get('/' , 'Backend\DashboardController@index')->name('admin.dashboard');
	Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
	Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
	Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);


	// Logo Routes
   Route::group(['prefix' => '/logos'], function(){
    Route::get('/', 'Backend\BackendController@index')->name('admin.logos');
    Route::post('/store', 'Backend\BackendController@store')->name('admin.logo.store');
    Route::post('/logo/edit/{id}', 'Backend\BackendController@update')->name('admin.logo.update');
    Route::post('/logo/delete/{id}', 'Backend\BackendController@delete')->name('admin.logo.delete');
  });

	// Sliders Routes
   Route::group(['prefix' => '/sliders'], function(){
    Route::get('/', 'Backend\BackendController@showSliders')->name('admin.sliders');
    Route::post('/store', 'Backend\BackendController@sliderStore')->name('admin.sliders.store');
    Route::post('/sliders/edit/{id}', 'Backend\BackendController@sliderUpdate')->name('admin.sliders.update');
    Route::post('/sliders/delete/{id}', 'Backend\BackendController@sliderDelete')->name('admin.sliders.delete');
  });


	// About Us Routes
   Route::group(['prefix' => '/aboutus'], function(){
    Route::get('/', 'Backend\BackendController@aboutusIndex')->name('admin.aboutus');
    Route::post('/store', 'Backend\BackendController@aboutusStore')->name('admin.aboutus.store');
    Route::post('/aboutus/edit/{id}', 'Backend\BackendController@aboutusUpdate')->name('admin.aboutus.update');
    Route::post('/aboutus/delete/{id}', 'Backend\BackendController@aboutusDelete')->name('admin.aboutus.delete');
  });

	// NON-PROFIT COMPONENT Routes
   Route::group(['prefix' => '/nonprofit'], function(){
    Route::get('/', 'Backend\BackendController@nonprofitIndex')->name('admin.nonprofit');
    Route::post('/store', 'Backend\BackendController@nonprofitStore')->name('admin.nonprofit.store');
    Route::post('/nonprofit/edit/{id}', 'Backend\BackendController@nonprofUpdate')->name('admin.nonprofit.update');
    Route::post('/nonprofit/delete/{id}', 'Backend\BackendController@nonprofDelete')->name('admin.nonprofit.delete');
  });

	// Board of directores Routes
   Route::group(['prefix' => '/bod'], function(){
    Route::get('/', 'Backend\BackendController@bodIndex')->name('admin.bod');
    Route::post('/store', 'Backend\BackendController@bodStore')->name('admin.bod.store');
    Route::post('/bod/edit/{id}', 'Backend\BackendController@bodUpdate')->name('admin.bod.update');
    Route::post('/bod/delete/{id}', 'Backend\BackendController@bodDelete')->name('admin.bod.delete');
  });

	// Board of Advisors Routes
   Route::group(['prefix' => '/boa'], function(){
    Route::get('/', 'Backend\BackendController@boaIndex')->name('admin.boa');
    Route::post('/store', 'Backend\BackendController@boaStore')->name('admin.boa.store');
    Route::post('/boa/edit/{id}', 'Backend\BackendController@boaUpdate')->name('admin.boa.update');
    Route::post('/boa/delete/{id}', 'Backend\BackendController@boaDelete')->name('admin.boa.delete');
  });

	// Board of Advisors Routes
   Route::group(['prefix' => '/address'], function(){
    Route::get('/', 'Backend\BackendController@addressIndex')->name('admin.address');
    Route::post('/store', 'Backend\BackendController@addressStore')->name('admin.address.store');
    Route::post('/address/edit/{id}', 'Backend\BackendController@addressUpdate')->name('admin.address.update');
    Route::post('/address/delete/{id}', 'Backend\BackendController@addressDelete')->name('admin.address.delete');
  });

	// Messesges Routes
   Route::group(['prefix' => '/messege'], function(){
    Route::get('/', 'Backend\BackendController@messegeIndex')->name('admin.messege');
    Route::post('/store', 'Backend\BackendController@messegeStore')->name('admin.messege.store');
    Route::post('/messege/edit/{id}', 'Backend\BackendController@messegeUpdate')->name('admin.messege.update');
    Route::post('/messege/delete/{id}', 'Backend\BackendController@messegeDelete')->name('admin.messege.delete');
  });

	// Subscribe Routes
   Route::group(['prefix' => '/subcribe'], function(){
    Route::get('/', 'Backend\BackendController@subcribeIndex')->name('admin.subcribe');
    Route::post('/store', 'Backend\BackendController@subcribeStore')->name('admin.subcribe.store');
    Route::post('/subcribe/edit/{id}', 'Backend\BackendController@subcribeUpdate')->name('admin.subcribe.update');
    Route::post('/subcribe/delete/{id}', 'Backend\BackendController@subcribeDelete')->name('admin.subcribe.delete');
  });

	// Login routes
	Route::get('/login' , 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login/submit' , 'Backend\Auth\LoginController@login')->name('admin.login.submit');
		

	//Logout Routes
	Route::post('/logout/submit' , 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');


	// Forget pssword Routes
	Route::get('/password/reset' , 'Backend\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset/submit' , 'Backend\Auth\ForgotPasswordController@reset')->name('admin.password.update');
});

