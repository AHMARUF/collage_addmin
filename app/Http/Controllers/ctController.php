<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ctController extends Controller
{
    public function students()
	{
		$student=DB::table('students')->where('diparment',2)->get();
		return view('admin.CT',compact('student'));
	}
}
