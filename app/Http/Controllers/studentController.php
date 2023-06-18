<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;


class studentController extends Controller
{
    //accessing all data from the databse
    public function index(){
    $data = student::get();
       // return $data;
       //insteade of viewing this on the above method, create a function on 
       // resources and called a list 
    return view('student-list', compact('data'));
    }

    public function addStudent(){
        //return "From add student";
        return view('add-student');
    }

    public function saveStudent(Request $request){
    //set validation
    $request->validate([
      'name'=>'required',
      'email'=>'required|email',
      'phone'=>'required',
      'address'=>'required',

    ]);
      //dd($request->all());
      $name = $request->name;
      $email = $request->email;
      $phone = $request->phone;
      $address = $request->address;

      //create student model
      $stu = new Student();
      $stu->name = $name;
      $stu->email = $email;
      $stu->phone = $phone;
      $stu->address = $address;
      $stu->save();

      return redirect()->back()->with('success','Student Added Successfully');
    }

    public function editStudent($id){
      /* to feach all data
      $data = Student::get();
      return $data;*/
      // to feach json single data
      $data = Student::where('id','=',$id)->first();
      return view('edit-student',compact('data'));
    }
  public function updateStudent(Request $request){
    $request->validate([
      'name'=>'required',
      'email'=>'required|email',
      'phone'=>'required',
      'address'=>'required',

    ]);
      $id = $request->id;
      $name = $request->name;
      $email = $request->email;
      $phone = $request->phone;
      $address = $request->address;

      Student::where('id', '=',$id)->update([
       'name'=>$name,
       'email'=>$email,
       'phone'=>$phone,
       'address'=>$address]);
        return redirect()->back()->with('success','Updated Added Successfully'); 
  }  
}  


