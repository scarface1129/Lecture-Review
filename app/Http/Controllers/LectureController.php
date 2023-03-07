<?php

namespace App\Http\Controllers;

use App\Models\lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function show($id){
        $Lecture = lecture::where('department_id', $id)->get();
        return view('lecture', [
            'Courses'=> $Lecture, 
            ]);
    }
}
