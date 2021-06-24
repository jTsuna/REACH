<?php

namespace App\Http\Livewire;

use App\Models\user;
use Livewire\Component;

class CounselorArchive extends Component
{
    public $users;
    public function render(User $users)
    {
        $this->users = $users->where('role_id', 3)->get();
        return view('livewire.counselor-archive');
    }
}
