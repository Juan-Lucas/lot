<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public $events = [];

    public function mount()
    {
        $this->events = Event::orderBy('created_at')->get();
    }

    public function render()
    {
        return view('livewire.admin.events');
    }
}
