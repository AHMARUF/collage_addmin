<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TeacherController extends Controller
{	
	public function index()
    {
        $teacher=DB::table('teacher')->get();
       	return view('admin.allTeacher',compact('teacher'));
    }

    public function create()
    {
        return view('admin.addTeacher');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required|unique:teacher', 
        'phone' => 'required', 
        'address' => 'required', 
        'diparment' => 'required',  
        'image' => 'required|mimes:jpeg,-=,png,gif|max:2048'
    ]);
        $data=array();
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['diparment']=$request->diparment;
        $image=$request->file('image');
        //return response()->json($data);

        if ($image) 
        {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/Teacher/images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['images']=$image_url;
            DB::table('teacher')->insert($data);

            $notification = array(
                'message' => 'Successfully ADD Teacher',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);  
        }else{
            DB::table('teacher')->insert($data);
            //echo "success";

            $notification = array(
                'message' => 'Pleace Try agin',
                'alert-type' => 'success'
            );

          return Redirect()->back()->with($notification);   
        }
        
    }
    public function destroy($id)
    {
        $student=DB::table('teacher')->where('id',$id)->first();
        $image=$student->images;
        $delete=DB::table('teacher')->where('id',$id)->delete();
   
        if ($delete) {
            unlink($image);
            $notification = array(
                'message' => 'Successfully  Deleted! ',
                'alert-type' => 'success'
            );

          return Redirect()->back()->with($notification); 
        }
    }
}
