<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public $users;
    public function mount(User $users){
        $this->users=$users->all();
    }
    public function render()
    {
        return view('livewire.user-table');
    }
}
