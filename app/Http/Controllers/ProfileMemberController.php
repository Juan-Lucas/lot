<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class ProfileMemberController extends Controller
{
    public function __invoke()
    {
        $membre = session('member_loggedIn');

        return view('pages.membres.profile', compact('membre'));
    }
}
