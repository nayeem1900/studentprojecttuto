<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

Use App\Student;

class AddstudentController extends Controller
{


    public function addstudent()
    {


        return view('admin.studentinfo');
        //
    }

        public function savestudent(Request$request){

        $students =new Student;
            $students->student_name=$request->student_name;
            $students->student_roll=$request->student_roll;
            $result=$students->save();

            if ($result){

                return redirect('/addstudent');

            }


        }

}
