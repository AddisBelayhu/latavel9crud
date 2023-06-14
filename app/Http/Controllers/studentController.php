<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    //accessing all data from the databse
    public function index(){
        $data = student::get();
        return $data;
    }
}
