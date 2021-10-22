<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GradSurvey;

class GradsurveyTable extends Component
{
    public $surveys;
    public function mount(GradSurvey $surveys){
        $this->surveys = $surveys->all();
    }
    public function render()
    {
        return view('livewire.gradsurvey-table');
    }
}
