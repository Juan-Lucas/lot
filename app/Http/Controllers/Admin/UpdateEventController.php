<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UpdateEventController extends Controller
{
    public $image;

    public function __invoke(Request $request, int $event_id)
    {
        $eventUpdated = Event::find($event_id);

        if($request->file('image'))
        {
            $this->image = File::basename($eventUpdated->image);

            $eventUpdated->update([
                'title' => $request->title,
                'description' => $request->description,
                'localisation' => $request->localisation,
                'image' => $request->image->store('evenements', 'public'),
                'heure' => $request->heure,
            ]);

            File::delete(['path' => 'storage/evenements'. '/'.$this->image]);

            session()->flash('updated', 'Evenement '.$eventUpdated['title'].' modifié avec succès.');

            return redirect()->route('admin.events');
        }

        $eventUpdated->update([
            'title' => $request->title,
            'description' => $request->description,
            'localisation' => $request->localisation,
            'heure' => $request->heure,
        ]);

        session()->flash('updated', 'Evenement '.$eventUpdated['title'].' modifié avec succès.');

        return redirect()->route('admin.events');
    }
}
