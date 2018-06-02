<?php
use App\College;
use App\University;
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
	$college = College::all();
	$university = University::all();
	return view('welcome',['college'=>$college,'university'=>$university]);
});

Route::view('contact','contact');
Route::view('about','about');
Route::view('placement','placement');



Auth::routes();

Route::resource('university','UniversityController');
Route::resource('college','CollegeController');
Route::resource('company','CompanyController');
Route::resource('student','StudentController');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('jare','UniversityController@verifyCollege');
Route::get('verify','AdminController@verifyUniversity');


Route::name('dash.university.')->prefix('dashboard/university')->group(
	function(){
		
		Route::get('/','UniversityController@index');
		Route::get('pendingcollege','UniversityController@showPendingCollege')->name('pendingcollege');
		Route::get('verifycollege','UniversityController@showVerifyCollege')->name('verifycollege');
});



Route::name('dash.college.')->prefix('dashboard/college')->group(
	function(){
		Route::get('/','CollegeController@index');
		//student
		Route::get('approve','CollegeController@approve')->name('approve');
		Route::get('studentlist','CollegeController@studentList')->name('studentlist');		
		Route::get('placedstudent','CollegeController@placedStudent')->name('placedstudent');
		Route::get('notplacedstudent','CollegeController@notPlacedStudent')->name('notplacedstudent');		
		// company
		Route::get('companylist','CollegeController@companyList')->name('companylist');
});

Route::name('dash.admin.')->prefix('dashboard/admin')->group(
	function(){
		Route::get('/','AdminController@index');
		Route::get('pendinguniversity','AdminController@showPendingUniversity')->name('pendinguniversity');
		Route::get('verifyuniversity','AdminController@showVerifyUniversity')->name('verifyuniversity');	
});
