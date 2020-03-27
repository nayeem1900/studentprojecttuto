<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//logout
Route::get('logout','AdminController@logout');



Route::get('/', function () {
    return view('admin.student_login');
});

Route::post('adminlogin','AdminController@login_dashboard');
Route::get('admin_dashboard','AdminController@admin_dashboard');

Route::group(['middleware' =>['LockCheck']], function() {

    Route::get('/backend', function () {
        return view('admin.admin_login');
    });



});


Route::get('addstudent', 'AddstudentController@addstudent');

Route::post('save_student', 'AddstudentController@savestudent');
//CSE
    Route::get('cse', 'AdminController@cse');

//save student''''''

   // Route::post('save_student', 'AdminController@savestudent');
//view profile
    Route::get('viewprofile', 'AdminController@viewprofile');
//setting
    Route::get('setting', 'AdminController@setting');

//All Student
    Route::get('all', 'AllstudentController@allstudent');
    Route::get('allstudent', 'AllstudentController@allstudent');
    Route::get('student_delet{student_id}', 'AllstudentController@studentdelet');
   // Route::get('/student_delet/{student_id}', 'AllstudentController@allstudentdelet');
//All Student
    Route::get('tutionfee', 'AdminController@tution');
    //All Student
//Route::get('cse','CSEController@cse');
    //All Student
    Route::get('bba', 'AdminController@bba');
    Route::get('eee', 'AdminControllerr@bba');
    Route::get('ece', 'AdminController@bba');
