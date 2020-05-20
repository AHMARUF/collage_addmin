<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class Studentcontroller extends Controller
{
    public function login_Student(Request $request)
    {
        $email=$request->email;
        $password=md5($request->password);
        $result=DB::table('students')
        ->where('passwrod',$password)
        ->where('email',$email)
        ->first();
        if($result)
        {
            session::put('email',$result->email);
            session::put('id',$result->id);
            return Redirect::to('/student_dashboard');
                    
        }
        else{
            session::put('exception','Email or Password Invalid');
            return Redirect::to('/');
        }
    }
    public function student_dashboard()
    {
        return view('Dashboardstudent');
    }
     public function Profile()
    {
    		$student=session::get('id');
    		$student_Profile=DB::table('students')->select('*')->where('id',$student)->first();
        return view('Profile',compact('student_Profile'));
    }
    public function settings()
    {
    	$student=session::get('id');
    		$settings=DB::table('students')->select('*')->where('id',$student)->first();
        return view('settings',compact('settings'));
    }
   
    public function logout()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/');
    }
    public function dashboard()
    {
    	$student=session::get('id');
        return view('Dashboardstudent');
    }
    public function update(Request $request)
    {
         $validatedData = $request->validate([
        'name' => 'required', 
        'phone' => 'required', 
        'address' => 'required', 
        ]);
         $id=session::get('id');
    	$data=array();
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $student=DB::table('students')->where('id',$id)->update($data);
        if ($student) 
        {
            $notification = array(
                'message' => 'Successfully update',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);  
        }else{
           
            $notification = array(
                'message' => 'Successfully update! ',
                'alert-type' => 'success'
            );

          return Redirect()->back()->with($notification);   
        }
    }
    
}
