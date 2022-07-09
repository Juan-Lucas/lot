<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddEvent extends Component
{

    use WithFileUploads;

    public string $title = '';
    public string $description = '';
    public string $localisation = '';
    public string $heure = '';
    public $image = null;

    public function save()
    {

        $event = Event::create([
            'title' => $this->title,
            'description' => $this->description,
            'localisation' => $this->localisation,
            'heure' => $this->heure,
            'image' =>  $this->image->store('evenements', 'public'),
        ]);

        $event->save();

        session()->flash('saved', 'Evenement '.$event['title'].' ajouté avec succès.');

        return redirect()->route('admin.events');
    }

    public function render()
    {
        return view('livewire.admin.add-event');
    }
}
