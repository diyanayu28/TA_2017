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
Route::get('/utama', function () {
    return view('layouts.utama');
});
Route::get('users', function () {
	return view('layouts.master');
});

Route::get('dokter', function () {
	return view('dokter.index');
});
Route::get('kamar', function () {
	return view('layouts.kamar');
});
Route::get('antrian', function () {
	return view('layouts.antrian');
});
Route::get('kontak', function () {
	return view('layouts.kontak');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

  Route::prefix('admin')->group(function() {
	  Route::resource('manageadmins', 'ManageAdminController');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
 });

 Route::resource('manageadmins', 'ManageAdminController');
 Route::get('kamar', 'KamarController@index');
 Route::get('dokter', 'DokterController@index');
 Route::resource('dokters', 'DokterController');
