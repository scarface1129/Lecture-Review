<?php

namespace App\Http\Controllers;

use App\Models\lecture;
use App\Models\Lecturer;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LecturerController extends Controller
{
    public function show($id){
        $Lecturer = Lecturer::where('lecture_id', $id)->get();
        return view('lecturer.lecturers', [
            'lecturer'=> $Lecturer, 
            ]);
    }

    public function create(){
        $courses = lecture::all();
        return view('lecturer.create',['courses'=>$courses]);
}

public function store(Request $request)
{
    // dd($request->image->getClientOriginalName());
    // file validation
    $validator      =   Validator::make($request->all(),
        ['name'      =>   'required|max:100|string',
        'employee_number'      =>   'required|max:12|integer',
        'course'      =>   'required',
        'email'      =>   'required|unique:Lecturers,email']
    );
    
    // if validation fails
    if($validator->fails()) {
        return back()->withErrors($validator);
    }
    // if($email){
    //     return back()->withErrors(['email'=> 'Email Already  Exist']);
    // }
    // if validation success
    if(request('employee_number')) {
    $lecturer = new Lecturer();
    $lecturer->name = request('name');
    $lecturer->email = request('email');
    $lecturer->employee_number = request('employee_number');
    $lecturer->lecture_id = request('course');
    $lecturer->department_id = lecture::findOrFail($lecturer->lecture_id)->department_id;
    $lecturer->reviews = 1;
    
    
    $lecturer->save();
    return redirect("/courses/$lecturer->course")->with('mssg', 'Lecturer Profile Created Successfully');

    }
}
}