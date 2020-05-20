<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class aidtController extends Controller
{
    public function students()
	{
		$student=DB::table('students')->where('diparment',3)->get();
		return view('admin.CST',compact('student'));
	}
}
