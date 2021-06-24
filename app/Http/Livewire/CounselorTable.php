<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;


class CounselorTable extends Component
{
    public $users;
    public function render(User $users)
    {
        $this->users = $users->where('role_id', 3)->get();
        return view('livewire.counselor-table');
    }
}
