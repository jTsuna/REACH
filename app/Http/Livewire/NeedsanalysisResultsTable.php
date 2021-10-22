<?php

namespace App\Http\Livewire;

use App\Models\NeedsAnalysis;
use App\Models\Need;
use App\Models\User;
use App\Models\ProgramList;
use Livewire\Component;

class NeedsanalysisResultsTable extends Component
{

    public $needsAnalyses;
    protected $needs;
    public $users;
    public $needID = null;

    public function mount(NeedsAnalysis $needsAnalyses, Need $needs, User $users){
        $this->needsAnalyses = $needsAnalyses->all();
        $this->needs = $needs->all();
        $this->users = $users->all();
    }

    public function updateNeeds($needID)
    {
        //$this->resetPage();
        $this->needID = $needID;
    }

    public function render()
    {
        $this->needs = is_null($this->needID) ? Need::all() : Need::where('id', $this->needID)->get();
        return view('livewire.needsanalysis-results-table',['users' => $this->users, 'needs' => $this->needs, 'needsAnalyses' => $this->needsAnalyses]);
    }

    
}
