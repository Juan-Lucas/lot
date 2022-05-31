<?php

namespace App\Http\Livewire\Admin;

use App\Models\Membre;
use Livewire\Component;

class Members extends Component
{
    public $members = [];

    public  function mount()
    {
        $this->members = Membre::all();
    }

    public function render()
    {
        return view('livewire.admin.members');
    }
}
