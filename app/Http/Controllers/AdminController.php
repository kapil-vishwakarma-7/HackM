<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\University;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
        
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
        $admin= new Admin;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

 public function verifyUniversity(Request $r){
        $college = University::find($r->id);
//        dd($university);
        $college->pending = 0;
        $college->save();
        return response()->json($r,200);
    }

    public function showPendingUniversity()
    {
        $university = University::where('pending','=',1)->get();
        return view('admin.pending_university_show',['university'=>$university]);
    }
    public function showVerifyUniversity()
    {
        $university = University::where('pending','=',0)->get();
        // dd($university->pendingCollege);
        return view('admin.verify_university_show',['university'=>$university]);
    }
}
