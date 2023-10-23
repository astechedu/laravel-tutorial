<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for($i=0;$i<10;$i++){
            Employee::create([
                'name' => 'title '.$i,
                'email' => 'description title '.$i,
                'phone' => 'body for post '.$i,
                'address' => 'meerut '.$i,
                'phone' => '0000000098 '.$i,
                'areacode' => '234'.$i,
            ]);
        }
    }
}
