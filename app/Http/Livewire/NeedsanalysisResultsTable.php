<?php

namespace App\Http\Livewire;

use App\Models\NeedsAnalysis;
use Livewire\Component;

class NeedsanalysisResultsTable extends Component
{

    public $needsAnalyses;

    public function mount(NeedsAnalysis $needsAnalyses){
        $this->needsAnalyses = $needsAnalyses->all();
    }

    public function render()
    {
        return view('livewire.needsanalysis-results-table');
    }
}
