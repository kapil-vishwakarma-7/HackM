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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD




//public routes




// private routes

// Route::prefix('student')->group(function(){

// 	Route::get('login',function(){
// 		return echo "Success";
// 	});
// 	Route::get('/',function(){
// 		return echo "Success";
// 	});

// });
=======
Route::get('/h', 'HomeController@index')->name('home');
>>>>>>> b6be62d28b7b5999c8f28fde3d198035c943acb5
