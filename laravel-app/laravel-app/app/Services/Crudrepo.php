<?php
namespace app\Services;

use App\Models\student;
use Illuminate\Http\Request;

class CrudRepo{
    public function __construct(student $crud){
        $this->crud = $crud;
    }

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
    public function store($request)
    {
        $this->crud = new student;
        $this->crud->name = $request->input('name'); 
        $this->crud->email = $request->input('email'); 
        $this->crud->age = $request->input('age'); 
        $this->crud->save();
        //$st->session()->flash('msg','Student Record Inserted Successfully');
        return redirect('student');
        
    }
    public function fetch_data($request){
        if($request->ajax()){
            return view('pagination')->with('stArr',student::paginate(3))->render();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        return view('student_create')->with('stArr',student::paginate(3));
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request)
    {
        $this->crud = student::find($request->id);
        $this->crud->name = $request->get('name');
        $this->crud->email = $request->get('email');
        $this->crud->age = $request->get('age');
        $this->crud->save();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        student::destroy(array('id',$id));
        return redirect('student');
    }
}


?>