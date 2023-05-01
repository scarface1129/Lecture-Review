<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function show($id){
        $lecturer = Lecturer::findOrFail($id);
        if($lecturer){
            $id = $lecturer->id;
            $course_id = $lecturer->lecture_id;
            return view('reviews.review',['lecturer_id'=> $id, 'course_id'=>$course_id]);
        }else{
            return redirect("/departments")->with('mssg', 'No lecturer found');
        }
        
    }

    public function store(Request $request)
    {
        // dd($request->image->getClientOriginalName());
        // file validation
        $validator      =   Validator::make($request->all(),
            ['comment'      =>   'required|max:1000'],
            ['rate'      =>   'required']
        );

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        // if validation success
        if(request('comment')) {
        $Review = new Review();
        $Review->learnt = request('learnt');
        $Review->understand = request('understand');
        $Review->internet = request('internet');
        $Review->approachable = request('approachable');
        $Review->assignment = request('assignment');
        $Review->respect = request('respect');
        $Review->effective = request('effective');
        $Review->explanation = request('explanation');
        $Review->rate = request('rate');
        $Review->comment = request('comment');
        $Review->student_id = request('student_id');
        $Review->lecturers_id = request('lecturer_id');
        $course_id = request('course_id');
        
        
        $Review->save();
        return redirect("/lecturer/$course_id")->with('mssg', 'Review Posted Successfully');

        }
    }
}
