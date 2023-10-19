<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){

       $student = Student::get();

       return view('index',['students' => $student]);
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
