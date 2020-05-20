<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;
class admincontroller extends Controller
{
    public function admin_dashboard()
	{
		return view('admin.Dashboard');
	}
    public function login_dashboard(Request $request)
    {
    	$email=$request->admin_email;
    	$password=md5($request->admin_password);
    	$result=DB::table('admin_login')
    	->where('admin_password',$password)
    	->where('admin_email',$email)
    	->first();

    	
    	/*echo "<\pre>";
    	print_r($result);*/
    	if($result)
    	{
    		session::put('admin_email',$result->admin_email);
    		session::put('admin_id',$result->admin_id);
    		return Redirect::to('/admin_dashboard');
    		    	
    	}
    	else{
    		session::put('exception','Email or Password Invalid');
    		return Redirect::to('/beckend');
    	}
    	//return view('admin.Dashboard');
    }
    //view profile
    public function admin_Profile()
    {
        return view('admin.viewprofile');
    }
    //settings
    public function admin_settings()
    {
        return view('admin.settings');
    }
    //logout
    public function logout()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/beckend');
    }
    
    
}
