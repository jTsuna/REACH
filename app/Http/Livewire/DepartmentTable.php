<?php

namespace App\Http\Livewire;

use App\Models\Department;
use App\Models\User;
use Livewire\Component;

class DepartmentTable extends Component
{
    public $departments;
    public $users;

    public function mount(Department $departments){
        $this->departments = $departments->all();
    }

    public function render(User $users)
    {
        $this->users = $users->where('role_id', 3)->get();
        return view('livewire.department-table');
    }
}
