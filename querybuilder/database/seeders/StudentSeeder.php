<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      for($i=0;$i<5;$i++){
        DB::table('students')->insert([
            'name' => Str::random(5).' Kumar',
            'email' => Str::random(5).'@gmai.com',
            'password' => Str::random(5),
            'created_at' => now(),
            'updated_at' => now()
        ]);
       }
    }
}
