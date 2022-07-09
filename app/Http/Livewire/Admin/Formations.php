<?php

namespace App\Http\Livewire\Admin;

use App\Models\Formation;
use Livewire\Component;

class Formations extends Component
{
    public $formations = [];

    public function mount()
    {
        $this->formations = Formation::with('category_formation')
            ->orderBy('created_at','desc')
            ->get();
    }

    public function render()
    {
        return view('livewire.admin.formations');
    }
}
