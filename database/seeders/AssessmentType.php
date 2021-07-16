<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class AssessmentType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Needs Analysis'
        ]);

        Type::create([
            'name' => 'Online Family Profile Survey'
        ]);

        Type::create([
            'name' => 'Graduate Tracer Exam'
        ]);
    }
}
