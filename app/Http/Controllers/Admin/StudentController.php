<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    Public function getStudent(Request $request){
        return view('Admin/Student/index');
    }
    
    Public function addStudent(Request $request){
        return view('Admin/Student/add');
    }
}
