<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AllstudentController extends Controller
{

    public function allstudent()
    {


       // return view('admin.allstudent');

        $allstudent_info=DB:: table('students') ->get();
        $manage_student=view('admin.allstudent')->with('all_student_info',$allstudent_info);
            return view('layout')->with('allstudent', $manage_student);

    }

}
