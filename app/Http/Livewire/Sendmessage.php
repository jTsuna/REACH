<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Livewire\Component;

class Sendmessage extends Component
{
    public $message;

    protected $rules = [
        'message' => 'required|string',
    ];

    public function mount()
    {
        $this->emit('chat:update');
    }

    public function submit() {
        $this->validate();

        Chat::create([
            'user_id' => auth()->user()->id,
            'message' => $this->message,
        ]);

        $this->message="";

        $this->emit('chat:update');
    }
    
    public function render()
    {
        return view('livewire.sendmessage');
    }
}
