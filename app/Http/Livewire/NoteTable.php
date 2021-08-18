<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\NeedsAnalysis;
use Livewire\Component;

class NoteTable extends Component
{
    public $needsAnalyses;
    public $notes;

    public function mount(Note $notes, NeedsAnalysis $needsAnalyses){
        $this->notes = $notes->all();
        $this->needsAnalyses = $needsAnalyses->all();
    }

    public function render()
    {
        return view('livewire.note-table');
    }
}
