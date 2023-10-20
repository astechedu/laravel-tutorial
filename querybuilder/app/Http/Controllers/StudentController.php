<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function index(){

           $stds = DB::table('students')->get();
           //dd($stds);
           echo "<pre>";print_r($stds);
    }

    
    public function show(){

           $stds = DB::table('students')->where('id',17)->first();
           //dd($stds);
           echo "<pre>";print_r($stds);

    }

    public function update(){

           $stds = DB::table('students')->where('id',17)->update([
               'name' => 'new ajay id 17',
           ]);
           
    }

    public function delete(){

           $stds = DB::table('students')->where('id',17)->delete();
           
    }



}
