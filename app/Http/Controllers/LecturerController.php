<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\lecture;
use App\Models\Lecturer;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LecturerController extends Controller
{
    public function show($id){
        $Lecturer = Lecturer::where('lecture_id', $id)->get();
        $stars = 0;
        foreach ($Lecturer as  $value) {
            $review = Review::where('lecturers_id', $value["id"])->get();
            $value['reviews_count'] = count($review);
            
            foreach ($review as $val) {
                $stars = $val['rate'] + $stars;
            }
            if(count($review) > 0){
                $value['stars'] = round($stars/count($review));
            }else{
                $value['stars'] = 0;
            }
            
            
        }
        // dd($Lecturer);
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
        'employee_number'      =>   'required|integer',
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
    
    
    $lecturer->save();
    return redirect("/courses/$lecturer->lecture_id")->with('mssg', 'Lecturer Profile Created Successfully');

    }
}
}