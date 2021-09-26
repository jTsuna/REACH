<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Livewire\Component;

class Chatbox extends Component
{
    protected $listeners = [
        'chat:update' => '$refresh',
    ];

    public function mount()
    {
        $this->emit('chat:update');
    }

    public function hydrate()
    {
        $this->emit('chat:update');
    }

    public function dehydrate()
    {
        $this->emit('chat:update');
    }

    public function render(Chat $chats)
    {
        $chats = $chats->orderBy('id','asc')->get();
        return view('livewire.chatbox',compact('chats'));
    }
}
