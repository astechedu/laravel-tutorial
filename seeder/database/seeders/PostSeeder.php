<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for($i=0;$i<10;$i++){
            Post::create([
                'title' => 'title '.$i,
                'description' => 'description title '.$i,
                'body' => 'body for post '.$i,
            ]);
        }


     }   
}
