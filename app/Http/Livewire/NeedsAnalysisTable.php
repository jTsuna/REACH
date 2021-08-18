<?php

namespace App\Http\Livewire;

use App\Models\NeedsAnalysis;
use Livewire\Component;

class NeedsAnalysisTable extends Component
{
    public $needsAnalyses;

    public function mount(NeedsAnalysis $needsAnalyses){
        $this->needsAnalyses = $needsAnalyses->all();
    }

    public function render()
    {
        return view('livewire.needs-analysis-table');
    }
}
