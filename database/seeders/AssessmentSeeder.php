<?php

namespace Database\Seeders;

use App\Models\Assessment;
use Illuminate\Database\Seeder;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assessment::create([
            'type_id' => 1,
            'status' => 'Open'
        ]);

        Assessment::create([
            'type_id' => 2,
            'status' => 'Open'
        ]);

        Assessment::create([
            'type_id' => 3,
            'status' => 'Open'
        ]);
    }
}
