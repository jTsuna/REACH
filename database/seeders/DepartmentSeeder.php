<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

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
            'name' => 'School of Architecture and Planning, Industrial Design, and the Built Environment'
        ]);

        Department::create([
            'name' => 'School of Chemical, Biological, and Materials Engineering and Sciences'
        ]);

        Department::create([
            'name' => 'School of Civil, Environmental & Sanitary and Geological Engineering'
        ]);

        Department::create([
            'name' => 'School of Electrical, Electronics, and Computer Engineering'
        ]);

        Department::create([
            'name' => 'School of Graduate Studies'
        ]);

        Department::create([
            'name' => 'School of Industrial Engineering and Engineering Management'
        ]);

        Department::create([
            'name' => 'School of Media Studies'
        ]);

        Department::create([
            'name' => 'School of Mechanical and Manufacturing Engineering'
        ]);

        Department::create([
            'name' => 'Department of Mathematics'
        ]);

        Department::create([
            'name' => 'Department of Physical Education and Artes'
        ]);

        Department::create([
            'name' => 'School of Social Sciences and Education'
        ]);

        Department::create([
            'name' => 'Department of Physics'
        ]);

        Department::create([
            'name' => 'Enrique T. Yuchengco School of Business and Management'
        ]);

        Department::create([
            'name' => 'School of Information Technology'
        ]);

        Department::create([
            'name' => 'Office of International Career and Exchange Program'
        ]);

        Department::create([
            'name' => 'Department of Arts and Letters'
        ]);
    }
}
