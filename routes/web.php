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

Route::get('/beckend', function () {
    return view('admin.admin_login');
});


//students login
Route::get('/', function () {
    return view('student_login');
});

/*admin login*/
route::post('/adminlogin','admincontroller@login_dashboard');
route::get('/admin_dashboard','admincontroller@admin_dashboard');

//logout
route::get('/logout','admincontroller@logout');

//Profile
route::get('/Profile','admincontroller@admin_Profile');

//settings
route::get('/settings','admincontroller@admin_settings');

//addstudents
Route::resource('student','addstudentsController');

//all students
route::get('/student','addstudentsController@index');
route::get('/student/delete/{id}','addstudentsController@destroy');

//cst diparment
route::get('/cst','cstController@cststudents');

//cst diparment
route::get('/ct','ctController@students');

//cst diparment
route::get('/aidt','aidtController@students');

//cst diparment
route::get('/et','etController@students');

//teacher add
route::get('index/Teacher','TeacherController@index');
route::get('create/Teacher','TeacherController@create');
route::post('store/Teacher','TeacherController@store');
route::get('teacher/{id}','TeacherController@show');
route::get('/teacher/delete/{id}','TeacherController@destroy');

//Student login

route::post('/Studentlogin','Studentcontroller@login_Student');
route::get('/student_dashboard','Studentcontroller@student_dashboard');
//logout
route::get('/studentlogout','Studentcontroller@logout');

//profile
route::get('/student_Profile','Studentcontroller@Profile');

//settings
route::get('/student_Settings','Studentcontroller@settings');

route::get('/student_dashboard','Studentcontroller@dashboard');

route::post('/updatestudent','Studentcontroller@update');
