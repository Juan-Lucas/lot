<?php

namespace App\Http\Livewire\Admin;

use App\Models\Formation;
use Livewire\Component;

class Dashboard extends Component
{

    public $formations = [];

    public function mount()
    {
        $this->formations = Formation::all();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
