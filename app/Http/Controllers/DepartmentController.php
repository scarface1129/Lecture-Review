<?php

namespace App\Http\Controllers;

// use Department;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function department() {
        $Department = Department::all();
        return view('department.department', [
            'Departments'=> $Department, 
            ]);
    }
}
