<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    
       $users = [

         ['id' => 01, 'name' => 'ajay'],
         ['id' => 02, 'name' => 'rohan'],
         ['id' => 03, 'name' => 'sohan'],
         ['id' => 04, 'name' => 'zubin'],
         ['id' => 05, 'name' => 'geeta'],
       ];

	   return view('passdata', ['users' => $users]);
   
    }
}
