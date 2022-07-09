<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EditEventController extends Controller
{

    public function __invoke(int $event_id)
    {
        $event = Event::find($event_id);

        return view('pages.admin.pages.edit-event', compact('event'));
    }
}
