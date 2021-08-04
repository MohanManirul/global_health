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
Route::get('/contact', 'Frontend\HomeController@contact')->name('contact');
Route::get('/about', 'Frontend\HomeController@about')->name('about');
Route::get('/service', 'Frontend\HomeController@service')->name('service');
Route::get('/pricing', 'Frontend\HomeController@pricing')->name('pricing');
Route::get('/software', 'Frontend\HomeController@software')->name('software');
Route::get('/hardware', 'Frontend\HomeController@hardware')->name('hardware');
Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');

// Admin Routes

Route::group(['prefix' => 'admin'] , function(){
	Route::get('/' , 'Backend\DashboardController@index')->name('admin.dashboard');
	Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
	Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
	Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);

	// Login routes
	Route::get('/login' , 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login/submit' , 'Backend\Auth\LoginController@login')->name('admin.login.submit');
		

	//Logout Routes
	Route::post('/logout/submit' , 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');


	// Forget pssword Routes
	Route::get('/password/reset' , 'Backend\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset/submit' , 'Backend\Auth\ForgotPasswordController@reset')->name('admin.password.update');
});

