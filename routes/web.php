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

// Route::view('/','welcome');
Route::get('/',function(){
	return view('welcome');
});

Route::get('adm',function(){
	return view('admin.index');
});
Route::get('com',function(){
	return view('company.index');
});
Route::get('col',function(){
	return view('college.index');
});
Route::get('uni',function(){
	return view('university.index');
});


Auth::routes();

Route::resource('university','UniversityController');
Route::resource('college','CollegeController');
Route::resource('company','CompanyController');
Route::resource('student','StudentController');

Route::get('/home', 'HomeController@index')->name('home');
