<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Role;
use Livewire\Component;

class UserTable extends Component
{
    public $users;
    public $roles;
    public function mount(User $users, Role $roles)
    {
        $this->users = $users->all();
        $this->roles = $roles->all();
    }
    public function render()
    {
        return view('livewire.user-table');
    }
}
