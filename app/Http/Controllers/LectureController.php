<?php

namespace App\Http\Controllers;

use App\Models\lecture;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LectureController extends Controller
{
    public function show($id){
        $Lecture = lecture::where('department_id', $id)->get();
        return view('lecture.lecture', [
            'Courses'=> $Lecture, 
            ]);
    }

    public function create(){
        $department = Department::all();
        return view('lecture.create',['department'=> $department,]);
}

public function store(Request $request)
{
    // dd($request->image->getClientOriginalName());
    // file validation
    $validator      =   Validator::make($request->all(),
        ['name'      =>   'required|max:100|string',
        'course_code'      =>   'required|max:7|',
        'department'      =>   'required',
]    );
    
    // if validation fails
    if($validator->fails()) {
        return back()->withErrors($validator);
    }
    
    if(request('course_code')) {
    $lecture = new lecture();
    $lecture->name = request('name');
    $lecture->course_code = request('course_code');
    $lecture->department_id = request('department');
    $lecture->save();
    return redirect("/")->with('mssg', 'Course Created Successfully');

    }
}
}
