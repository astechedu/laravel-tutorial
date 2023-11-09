<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Contact;

class TestController extends Controller
{

    public function user()
    {
        
       $users = User::with('contact')->get();

       dd($users->toArray());


    }


    public function contact()
    {
       $contact = Contact::with('user')->get();

       dd($contact->toArray());
    }

}
