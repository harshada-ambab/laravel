<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $st = new student;
        $st->name = $request->input('name'); 
        $st->email = $request->input('email'); 
        $st->age = $request->input('age'); 
        $st->save();
        //$st->session()->flash('msg','Student Record Inserted Successfully');
        return redirect('student');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {   
        return view('student_create')->with('stArr',student::paginate(3));
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student,$id)
    {
        return view('student_edit')->with('stArr',student::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        $res = student::find($request->id);
        $res->name = $request->get('name');
        $res->email = $request->get('email');
        $res->age = $request->get('age');
        $res->save();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student,$id)
    {
        student::destroy(array('id',$id));
        return redirect('student');
    }
}
