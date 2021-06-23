<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Role;
use App\Models\Program;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    public $users;
    public $search = null;
    public $roles;
    public $programs;

    public function mount(Role $roles, Program $programs){
        $this->roles = $roles->all();
        $this->programs = $programs->all();
    }

    public function render()
    {
        $this->users = !is_null($this->search) ? User::search($this->search)->orderBy('role_id', 'desc')->get() : User::orderBy('role_id', 'desc')->get();
        return view('livewire.user-table', [
            'users' => $this->users,
        ]);

    }
}
