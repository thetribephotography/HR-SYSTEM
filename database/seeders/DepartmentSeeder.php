<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Department::create([
                'dept_name' => 'COMPUTER SCIENCE',
            ]);
    
            Department::create([
                'dept_name' => 'COMPUTER INFORMATION SYSTEMS',
            ]);
    
            Department::create([
                'dept_name' => 'COMPUTER TECHNOLOGY',
            ]);
    
            Department::create([
                'dept_name' => 'INFORMATION TECHNOLOGY',
            ]);
    
            Department::create([
                'dept_name' => 'SOFTWARE ENGINEERING',
            ]);
        }
    
}
