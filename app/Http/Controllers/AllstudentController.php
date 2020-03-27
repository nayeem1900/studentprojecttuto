<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
use Illuminate\Support\Facades\DB;
class AllstudentController extends Controller
{
//all student sho in student form
    public function allstudent()
    {


         //return view('admin.all');

        $allstudent_info = DB:: table('students')->get();
        $manage_student = view('admin.all')->with('all_student_info', $allstudent_info);
        return view('layout')->with('all', $manage_student);

    }

//all student delete method
    public function studentdelet($student_id){

        DB:: table('students')->where ('student_id',$student_id)
            ->delete();
        return redirect::to('all');
    }


//all student view method


public function viewstudent($student_id){

$student_description_view=DB::table('students')
->select('*')
      ->where('student_id', $student_id)
        ->first();

$manage_description_student=view('admin.studentview')
    ->with('student_description_profile',$student_description_view);
return view('layout')->with('studentview',$manage_description_student);



        //return view('admin.studentview');

}





}