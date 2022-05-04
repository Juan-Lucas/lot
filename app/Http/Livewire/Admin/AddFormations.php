<?php

namespace App\Http\Livewire\Admin;

use App\Models\CategoryFormation;
use App\Models\Formation;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddFormations extends Component
{
    use WithFileUploads;

    public $title = '';
    public $description = '';
    public $duration = '';
    public $image = '';
    public $category = '';
    public $categories = [];

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'duration' => 'required',
        'image' => 'required|file|mimes:jpg,png,jpeg',
        'category' => 'required'
    ];

    public function mount()
    {
        $this->categories = CategoryFormation::all();
    }

    public function save()
    {
        $this->validate();

        $formation = Formation::create([
            'title' => $this->title,
            'description' => $this->description,
            'duration' => $this->duration,
            'image' => $this->image->store('formations', 'public'),
            'category_formation_id' => $this->category,
        ]);

        $formation->save();

        session()->flash('saved', 'Formation '.$formation['title'].' ajoutée avec succès.');

        return redirect()->route('admin.formations');
    }

    public function render()
    {
        return view('livewire.admin.add-formations');
    }
}
