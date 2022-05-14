<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateFormationRequest;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UpdateFormationController extends Controller
{
    public $image;

    public function __invoke(UpdateFormationRequest $request, int $formation_id)
    {
        $formationUpdated = Formation::find($formation_id);

        if($request->file('image'))
        {
            $this->image = File::basename($formationUpdated->image);

            $formationUpdated->update([
                'title' => $request->title,
                'description' => $request->description,
                'duration' => $request->duration,
                'image' => $request->image->store('formations', 'public'),
                'category_formation_id' => $request->category,
            ]);

            File::delete(['path' => 'storage/formations'. '/'.$this->image]);

            session()->flash('updated', 'Formation '.$formationUpdated['title'].' modifiée avec succès.');

            return redirect()->route('admin.formations');
        }

        $formationUpdated->update([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'category_formation_id' => $request->category,
        ]);

        session()->flash('updated', 'Formation '.$formationUpdated['title'].' modifiée avec succès.');

        return redirect()->route('admin.formations');
    }


}
