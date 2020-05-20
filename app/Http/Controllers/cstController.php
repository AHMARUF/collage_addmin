<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class cstController extends Controller
{
    public function cststudents()
	{
		$student=DB::table('students')->where('diparment',1)->get();
		return view('admin.CST',compact('student'));
	}
}
