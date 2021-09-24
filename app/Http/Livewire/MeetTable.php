<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class MeetTable extends Component
{
    public $users;


    public function render(User $users)
    {
        $this->users = $users->where('role_id', 3)->get();
        return view('livewire.meet-table');
    }
}
