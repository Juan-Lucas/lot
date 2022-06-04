<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordMemberRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordMemberController extends Controller
{

    public function __invoke(Request $request)
    {
        $userUpdated = User::find(session('member_loggedIn')->user_id);

//        dd($userUpdated->password = Hash::make('password'));

        if (!Hash::check($request->old_password, $userUpdated->password))
        {
            return redirect()
                ->back()
                ->with('failed', "Le mot de passe courant fourni ne correspond pas au mot de passe courant.");
        }

        if(strcmp($request->old_password, $request->password) == 0)
        {
            return redirect()
                ->back()
                ->with('failed', "Le nouveau mot de passe ne doit pas correspondre au mot de passe courant.");
        }


        $userUpdated->password = Hash::make($request->password);

        $userUpdated->save();

        session()->pull('member_loggedIn');

        return redirect()
            ->route('members.login.form')
            ->with('changed', "Votre mot de passe a été modifié avec succès.");
    }
}
