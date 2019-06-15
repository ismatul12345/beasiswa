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
	if (Auth::user()) {
		return redirect('/home');
	}
    return view('auth.login');
});

Auth::routes();

Route::group(['namespace' => 'Auth'], function () {
		Route::get('login', 'LoginController@showLogin')->name('superadmin.showlogin');
		Route::post('login', 'LoginController@doLogin')->name('superadmin.login');
		Route::get('logout', 'LoginController@logout')->name('superadmin.logout');
	});



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/content','ContentController@index')->name('content');//route 
Route::get('/addcontent', 'ContentController@addContent')->name('addcontent');
Route::post('/createcontent', 'ContentController@createContent')->name('createcontent');
Route::post('/deletecontent/{id}', 'ContentController@deleteContent')->name('deletecontent');
Route::get('/editcontent{id}', 'ContentController@editContent')->name('editcontent');
Route::post('/updatecontent/{id}', 'ContentController@updateContent')->name('updatecontent');

//mahasiswa
Route::get('/homepage','MahasiswaController@homepage')->name('homepage');
