<?php

namespace App\Http\Livewire;

use App\Models\NeedsAnalysis;
use App\Models\Need;
use App\Models\User;
use Livewire\Component;

class NeedsanalysisResultsTable extends Component
{

    public $needsAnalyses;
    public $needs;
    public $users;

    public function mount(NeedsAnalysis $needsAnalyses, Need $needs, User $users){
        $this->needsAnalyses = $needsAnalyses->all();
        $this->needs = $needs->all();
        $this->users = $users->all();
    }

    public function render()
    {
        return view('livewire.needsanalysis-results-table');
    }
}
