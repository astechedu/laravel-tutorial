<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){

       $student = DB::table('students')->get();
  
       return view('index',['data' => $student]);
    }



    public function save(){

       $student = new Student;

       $student->name="new user";
       $student->email="new@gmail.com";
       $student->password="new password";
       $student->updated_at=now();
       $student->created_at =now();

       $student->save();

    }

}
