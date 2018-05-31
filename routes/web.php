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
Route::get('showcollege',function(){
	return view('university.college_show');
});

Route::get('about',function(){
	return view('about');
});
Route::view('contact','contact');
Route::view('placement','placement');


Auth::routes();

Route::resource('university','UniversityController');
Route::resource('college','CollegeController');
Route::resource('company','CompanyController');
Route::resource('student','StudentController');

Route::get('/home', 'HomeController@index')->name('home');


Route::name('dash.university.')->prefix('dashboard/university')->group(
	function(){
		
		Route::get('/','UniversityController@index');
		
});


Route::name('dash.college.')->prefix('dashboard/college')->group(
	function(){
		Route::get('/','CollegeController@index');
		//student
		Route::get('approve','CollegeController@approve')->name('approve');
		Route::get('studentlist','CollegeController@studentList')->name('studentlist');
		
		// company
		Route::get('companylist','CollegeController@companyList')->name('companylist');

});
