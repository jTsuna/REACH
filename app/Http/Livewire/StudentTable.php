<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Department;
use Livewire\Component;

class StudentTable extends Component
{
    public $users;
    public $departments;

    public function mount(Department $departments)
    {
        $this->departments = $departments->all(); 
    }
    
    public function render(User $users)
    {
        $this->users = $users->where('role_id', 4)->get();
        return view('livewire.student-table');
    }
}
