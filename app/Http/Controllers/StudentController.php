<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $student = Auth::user()->student;
        return view('student.index',['student'=>$student]);
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
        $user->role = 'stu';
        //$user->name = $request->name;
        $user->save();
        $student=new Student;

        $student->college_name=$request->college_name;
        $student->user_id=$user->id;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->contact=$request->contact;
        $student->permanent_address=$request->permanent_address;
        $student->eadhar=$request->eadhar;
        $student->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Student::find($id);
        
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
}
