<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use Session;
session_start();

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    /** public function login_dashboard()
     * {
     * return view('admin_dashboard');
     * } */
//add student




//addstudent end

//all student



//allstudent end



//tutionfee

    public function tution()
    {


        return view('admin.tutionfee');
        //
    }
//tutionfee end

//view profile

    public function viewprofile()
    {


        return view('admin.view');
        //
    }

    //setting

    public function setting()
    {


        return view('admin.setting');

    }
//cse start

    public function cse (){

        return view('admin.cse');
    }


//cse end

//SAVE STUDENT


    public function sa (){

        return view('admin.cse');
    }



    public function admin_dashboard()
    {


        return view('admin_dashboard');
        //
    }
//logout part

public function logout()
{
    Session:: put('admin_name', null);
    Session:: put('admin_id', null);
    return Redirect::to('/backend');

}


//loging part
    function login_dashboard(Request $request)
    {

        $email = $request->admin_email;
        $password = md5($request->admin_password);
        $result = DB::table('admin_tbl')
            ->where('admin_email', $email)
            ->where('admin_password', $password)
            ->first();


        if ($result) {

            Session::put('admin_email', $result->admin_email);
            Session::put('admin_id', $result->admin_id);

            return redirect:: to('/admin_dashboard');
        }


        else{

            Session::put('exception', "Email or Password, Invalid");

            return redirect:: to('/backend');

        }
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
