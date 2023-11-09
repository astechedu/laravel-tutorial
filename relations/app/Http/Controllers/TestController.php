<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Contact;
use App\Models\Post;

class TestController extends Controller
{

    
    public function user()
    {
       //One Two One Relationship
       $users = User::with('contact')->get();
       dd($users->toArray());
    }

   
    public function contact()
    {
      //One Two One Relationship
       $contact = Contact::with('user')->get();
       dd($contact->toArray());
    }



    //One Two Many Relationship

    public function one2many()
    {
       //Fetch Users with posts
       //$user = User::with('posts')->find(5);
       //dd($user->toArray());



       //Fetch Post with user

       $post = Post::with('user')->get();
       dd($post->toArray());
      
    }



}
