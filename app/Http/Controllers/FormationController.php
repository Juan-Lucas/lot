<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {

        return view('pages.formations.formations');
    }

    public function show(int $formation_id)
    {

        $formation = Formation::find($formation_id);

        if ($formation !== null) {

            abort(404, 'Formation not found !');
        }

        return view('pages.formations.formation', compact('formation'));
    }
}
