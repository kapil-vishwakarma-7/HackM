<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;
use App\User;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('college.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->email = $request->email;
        // $user->email = 'asdj';
        $user->password = bcrypt($request->password);
        $user->role = 'col';
        //$user->name = $request->name;
        $user->save();

        $college=new College;
        $college->user_id = $user->id;
        $college->university_id=$request->university_id;
        $college->college_code=$request->code;
        $college->name=$request->name;
        $college->contact=$request->contact;
        $college->email=$request->email;
        $college->address=$request->address;
        $college->college_type=$request->college_type;
        $college->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return College::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approve(){
        //
        return view('college.student_approval'); 
    }
    public function studentList(){
        return view('college.student_list');
    }
    public function companyList(){
        return view('college.company_list');
    }
    public function placedStudent(){
        return view('college.placed_student');
    }
    public function notPlacedStudent(){
        return view('college.not_placed');
    }

}
