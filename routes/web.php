
<?php
use App\College;
use App\University;
use App\Placement;
use App\Student;
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
Route::get('contact',function(){
	$college = College::all();
	$university = University::all();
	return view('contact',['college'=>$college,'university'=>$university]);
});
Route::get('about',function(){
	$college = College::all();
	$university = University::all();
	return view('about',['college'=>$college,'university'=>$university]);
});
Route::get('placement',function(){
	$college = College::all();
	$university = University::all();
	$year = 2012;
	$bardata = Placement::where('year',$year)->select('college_id', DB::raw('count(*) as total'))
                 ->groupBy('college_id')->orderBy('total','desc')->take(12)
                 ->get();

                 // dd($bardata[0]->college->name);

    $piedata_placed = Placement::where('year',2012)->count() ;
    $piedata_notplaced = Student::where('validity_end',2012)->count() - $piedata_placed;
    $pplaced = ($piedata_placed/($piedata_placed+$piedata_notplaced))*100;
    $pnotplaced = ($piedata_notplaced/($piedata_placed+$piedata_notplaced))*100;
    // dd($piedata);

    // year wise data
    $years = Placement::select('year')->distinct()->orderBy('year')->get();
    $year_data = [];
    foreach ($years as $e ) {
    	$year_placed     = Placement::where('year',$e['year'])->count();
    	$year_notplaced  = Student::where('validity_end',$e)->count() - $year_placed;
    	$year_data[$e['year']]['placed'] =  $year_placed;
    	$year_data[$e['year']]['notplaced'] =  $year_notplaced;
    	$year_data[$e['year']]['year'] =  $e['year'];

    }
    // dd($year_data);
    
    // university college placement 
    $u_placed = [];
    $university_id = '2';
    $u = University::find($university_id);
    $i=0;  
    foreach($u->college as $e){
    	$pl = Placement::where('college_id',$e->college_code)->where('year',2012)->count();
    	$u_placed[$i]['college'] = $e;
    	$u_placed[$i++]['placement'] = $pl;
    }
    // dd($u_placed[1]['college']->name);


	return view('placement',['year_data'=>$year_data,'u_placed'=>$u_placed,'p_placed'=>$pplaced,'p_notplaced'=>$pnotplaced,'bardata'=>$bardata,'college'=>$college,'university'=>$university]);
});



Auth::routes();

Route::resource('university','UniversityController');
Route::resource('college','CollegeController');
Route::resource('company','CompanyController');
Route::resource('student','StudentController');
Route::post('/jobdetail/{id}','StudentController@jobDetail');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('jare','UniversityController@verifyCollege');
Route::get('a','AdminController@verifyUniversity');


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

Route::get('createuser',function(){
	$user = factory(App\Company::class,100)->create();
});




Route::get('ka',function(){
	$college = College::all();
	$university = University::all();
	return view('student.student',['college'=>$college,'university'=>$university]);
});

Route::name('dash.student.')->prefix('dashboard/student')->group(
	function(){
		Route::get('/','StudentController@index');

		
});
