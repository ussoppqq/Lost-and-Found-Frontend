<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserList extends Component
{
    public $users = [];

    public function mount()
    {
        $response = Http::get('http://127.0.0.1:8000/api/users'); 
        if ($response->successful()) {
            $this->users = $response->json();
        }
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
