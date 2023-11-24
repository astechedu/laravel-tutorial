<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Category;

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


    //Many Two Many Relationship

    public function many2many()
    {
       
      $categories = Category::all();

      $post = Post::with('categories')->first(); 
      
      $post->categories()->attach($categories);

      $post->categories()->attach([1]);

      dd($post->toArray());












      //$post->categories()->attach($categories);  //attach(), detach(), sync([1,2])
      //OR
      //$post->categories()->detach($categories);
      //OR
      //$post->categories()->sync([1,2]);
      //OR
      //$post->categories()->sync([1,2]);
      //OR
      //$post->categories()->attach([1,2]); 

      //$post->categories()->detach([1,2]);

      //$post = Post::with('categories')->first();

      //$post->categories()->detatch($categories);

      //$post->categories()->sync([1,2,3]);

      //dd($post->toArray());
      //12:15
      
    }

}
