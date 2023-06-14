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
}
