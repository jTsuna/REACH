<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\ProgramList;
use Livewire\Component;

class ProgramTable extends Component
{
    public $users;
    public $programs;

    public function mount(ProgramList $programs){
        $this->programs = $programs->all();
    }

    public function render(User $users)
    {
        $this->users = $users->where('role_id', 3)->get();
        return view('livewire.program-table');
    }
}
