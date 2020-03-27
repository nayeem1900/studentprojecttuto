<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class AllstudentController extends Controller
{

    public function allstudent()
    {


         //return view('admin.all');

        $allstudent_info = DB:: table('students')->get();
        $manage_student = view('admin.all')->with('all_student_info', $allstudent_info);
        return view('layout')->with('all', $manage_student);

    }






}