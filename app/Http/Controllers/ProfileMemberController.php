<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\FormationMembre;
use App\Models\Membre;
use Illuminate\Http\Request;

class ProfileMemberController extends Controller
{
    public function __invoke()
    {
        $membre = session('member_loggedIn');

        $formations = Formation::whereIn('id', FormationMembre::pluck('formation_id'))->get();

        return view('pages.membres.profile', compact('membre', 'formations'));
    }
}
