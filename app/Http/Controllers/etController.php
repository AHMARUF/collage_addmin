<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class etController extends Controller
{
    public function students()
	{
		$student=DB::table('students')->where('diparment',4)->get();
		return view('admin.ET',compact('student'));
	}
}
