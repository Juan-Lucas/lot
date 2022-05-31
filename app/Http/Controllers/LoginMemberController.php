<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginMemberController extends Controller
{
    public function index()
    {
        return view('pages.membres.login-membre');
    }

    public function login(Request $request)
    {
        $user = User::where('name', $request->username)->first();

        if(!$user || !Hash::check($request->password, $user->password))
        {
            return redirect()->back()->with("failed","Mot de passe ou nom d\'utilisateur incorect.");
        }

        $membre = Membre::find($user->id);

        session()->put(['member_loggedIn' => $membre]);

        return redirect()->route('members.profile');
    }
}
