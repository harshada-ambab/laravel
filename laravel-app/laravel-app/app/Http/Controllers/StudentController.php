<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Services\Crudrepo;
use DB;

class StudentController extends Controller
{

    public function __construct(Crudrepo $crudRepo){
        $this->crudRepo = $crudRepo;
    }
    /**
     * Display a listing of the resource.
     *crudRepo
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
        
        return $this->crudRepo->create();
        //return view('student_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->crudRepo->store($request);
        
    }
    public function fetch_data(Request $request, student $student){

        return $this->crudRepo->fetch_data($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
        return $this->crudRepo->show();
        
        
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student,$id)
    {
        return $this->crudRepo->edit($id); 
        //return view('student_edit')->with('stArr',student::find($id));
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
        return $this->crudRepo->update($request); 
        // $res = student::find($request->id);
        // $res->name = $request->get('name');
        // $res->email = $request->get('email');
        // $res->age = $request->get('age');
        // $res->save();
        // return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student,$id)
    {
        return $this->crudRepo->destroy($id);
        // student::destroy(array('id',$id));
        // return redirect('student');
    }
}
