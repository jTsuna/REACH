<?php

namespace Database\Seeders;

use App\Models\NeedsAnalysis;
use Illuminate\Database\Seeder;

class NeedsAnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NeedsAnalysis::create([
            'question' => 'Weight Problem'
        ]);

        NeedsAnalysis::create([
            'question' => 'Too Little Time for Recreation'
        ]);

        NeedsAnalysis::create([
            'question' => 'Sickly'
        ]);

        NeedsAnalysis::create([
            'question' => 'Height Problem'
        ]);

        NeedsAnalysis::create([
            'question' => 'Inability to understand'
        ]);

        NeedsAnalysis::create([
            'question' => 'Weak Eyes'
        ]);

        NeedsAnalysis::create([
            'question' => 'Poor Body Complexion'
        ]);

        NeedsAnalysis::create([
            'question' => 'Inferiority Complex'
        ]);

        NeedsAnalysis::create([
            'question' => 'Hearing Difficulty'
        ]);

        NeedsAnalysis::create([
            'question' => 'Poor Posture'
        ]);

        NeedsAnalysis::create([
            'question' => 'Difficulty in Making Decision'
        ]);

        NeedsAnalysis::create([
            'question' => 'Too Easily Discourage'
        ]);

        NeedsAnalysis::create([
            'question' => 'Oral Communication Skills'
        ]);

        NeedsAnalysis::create([
            'question' => 'Difficulty in Making Friends'
        ]);

        NeedsAnalysis::create([
            'question' => 'Identity Crisis'
        ]);

        NeedsAnalysis::create([
            'question' => 'Coping with Academic Pressures'
        ]);

        NeedsAnalysis::create([
            'question' => 'Too Easily Led By Other People'
        ]);

        NeedsAnalysis::create([
            'question' => 'Immature/Childish'
        ]);

        NeedsAnalysis::create([
            'question' => 'Fear of Opposite Sex'
        ]);

        NeedsAnalysis::create([
            'question' => 'Family Problem'
        ]);

        NeedsAnalysis::create([
            'question' => 'Financial Problem'
        ]);
    }
}
