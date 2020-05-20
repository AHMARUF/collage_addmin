<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class addstudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=DB::table('students')->get();
        return view('admin.allStudents',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required', 
        'roll' => 'required|unique:students|max:6|min:6', 
        'fathername' => 'required', 
        'mothername' => 'required', 
        'email' => 'required|unique:students', 
        'phone' => 'required|unique:students', 
        'diparment' => 'required', 
        'address' => 'required', 
        'admission_year' => 'required', 
        'passwrod' => 'required|max:6|min:6',  
        'image' => 'required|mimes:jpeg,-=,png,gif|max:2048'
    ]);
        $data=array();
        $data['name']=$request->name;
        $data['roll']=$request->roll;
        $data['fathername']=$request->fathername;
        $data['mothername']=$request->mothername;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['diparment']=$request->diparment;
        $data['address']=$request->address;
        $data['admission_year']=$request->admission_year;
        $data['passwrod']=md5($request['passwrod']);
        $image=$request->file('image');
        //return response()->json($data);

        if ($image) 
        {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/frontend/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['images']=$image_url;
            DB::table('students')->insert($data);

            $notification = array(
                'message' => 'Successfully ADD Student',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);  
        }else{
            DB::table('students')->insert($data);
            //echo "success";

            $notification = array(
                'message' => 'Pleace Try agin',
                'alert-type' => 'success'
            );

          return Redirect()->back()->with($notification);   
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=DB::table('students')->where('id',$id)->first();
        return view('admin.viewStudent')->with('student',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=DB::table('students')->where('id',$id)->first();
        return view('admin.Eidtstudent',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'name' => 'required', 
        'roll' => 'required|max:6|min:6', 
        'fathername' => 'required', 
        'mothername' => 'required', 
        'email' => 'required', 
        'phone' => 'required', 
        'address' => 'required', 
        'admission_year' => 'required', 
        'passwrod' => 'required',  
        'image' => 'mimes:jpeg,-=,png,gif|max:2048'
    ]);
        $data=array();
        $data['name']=$request->name;
        $data['roll']=$request->roll;
        $data['fathername']=$request->fathername;
        $data['mothername']=$request->mothername;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['admission_year']=$request->admission_year;
        $data['passwrod']=$request->passwrod;
        $image=$request->file('image');
        if ($image) 
        {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/frontend/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['images']=$image_url;
            unlink($request->old_photo);
            DB::table('students')->where('id',$id)->update($data);

            $notification = array(
                'message' => 'Successfully update',
                'alert-type' => 'success'
            );
            return Redirect()->to('student')->with($notification);  
        }else{
            $data['images']=$request->old_photo;
            DB::table('students')->where('id',$id)->update($data);
            //echo "success";

            $notification = array(
                'message' => 'Successfully update! ',
                'alert-type' => 'success'
            );

          return Redirect()->to('student')->with($notification);   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=DB::table('students')->where('id',$id)->first();
        $image=$student->images;
        $delete=DB::table('students')->where('id',$id)->delete();
   
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
