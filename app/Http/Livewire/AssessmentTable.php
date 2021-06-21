<?php

namespace App\Http\Livewire;

use App\Models\Assessment;
use App\Models\Type;
use Livewire\Component;

class AssessmentTable extends Component
{
    public $assessments;
    public $types;
    public function mount(Assessment $assessments, Type $types)
    {
        $this->assessments = $assessments->all();
        $this->types = $types->all();
    }
    public function render()
    {
        return view('livewire.assessment-table');
    }
}
