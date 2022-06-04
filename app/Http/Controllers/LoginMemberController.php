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
        $user = User::where('name', $request->username)
            ->first();

        if(!$user || !Hash::check($request->password, $user->password))
        {
            return redirect()
                ->back()
                ->withInput()
                ->with("failed","Mot de passe ou nom d'utilisateur incorect.");
        }

        $member = Membre::where('user_id',$user->id)
            ->first();

        session()->put(['member_loggedIn' => $member]);

        return redirect()->route('members.profile');
    }
}
