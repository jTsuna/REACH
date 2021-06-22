<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    public $users;
    public $search = null;
    public $roles;

    public function mount(Role $roles){
        $this->roles = $roles->all();
    }

    public function render()
    {
        $this->users = !is_null($this->search) ? User::search($this->search)->orderBy('role_id')->get() : User::orderBy('role_id')->get();
        return view('livewire.user-table', [
            'users' => $this->users,
        ]);

    }
}
