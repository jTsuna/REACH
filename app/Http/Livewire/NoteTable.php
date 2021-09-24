<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Department;
use App\Models\StudentProfile;
use App\Models\ProgramList;
use Livewire\Component;


class NoteTable extends Component
{   
    public $users;
    public $departments;
    public $profiles;
    public $programs;

    public function mount(Department $departments, StudentProfile $profiles, ProgramList $programs)
    {
        $this->departments = $departments->all(); 
        $this->profiles = $profiles->all(); 
        $this->programs = $programs->all();
    }

    public function render(User $users)
    {   
        $this->users = $users->where('role_id', 4)->get();
        return view('livewire.note-table',['users' => $this->users, 'departments' => $this->departments, 'profiles' => $this->profiles, 'programs' => $this->programs]);
    }
}
