<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $Lecturer = Lecturer::all();
        
        foreach ($Lecturer as  $value) {
            $review = Review::where('lecturers_id', $value["id"])->get();
            $value['reviews_count'] = count($review);
            $stars = 0;
            
            foreach ($review as $val) {
                $stars = $val['rate'] + $stars;
            }
            if(count($review) > 0){
                $value['stars'] = round($stars/count($review));
            }else{
                $value['stars'] = 0;
            }
            
            
        }
        $most_reviewed_lectures = $Lecturer;
        $latest_reviewed_lectures = $Lecturer;
        return view('welcome', [
            'lecturers'=> $Lecturer, 
            'most_reviewed_lecturers'=> $most_reviewed_lectures,
            'latest_reviewed_lectures'=> $latest_reviewed_lectures,
            ]);
        }
}
