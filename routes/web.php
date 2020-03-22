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

Route::group(['middleware' =>['LockCheck']], function(){

    Route::get('/backend', function () {
        return view('admin.admin_login');
    });



});