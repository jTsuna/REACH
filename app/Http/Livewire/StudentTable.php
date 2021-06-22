<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class StudentTable extends Component
{
    public $users;
    
    public function render(User $users)
    {
        $this->users = $users->where('role_id', 4)->get();
        return view('livewire.student-table');
    }
}
