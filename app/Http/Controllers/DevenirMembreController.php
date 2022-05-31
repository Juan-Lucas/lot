<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterMemberRequest;
use App\Models\Membre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DevenirMembreController extends Controller
{
    public function index()
    {
       return view('pages.membres.devenir-membre');
    }

    public function register(Request $request)
    {
//        var_dump($request->all());die();
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        $member = Membre::create([
            'nomcomplet' => $request->nomcomplet,
            'email' => $request->email,
            'profession' => $request->profession,
            'age' => $request->age,
            'sexe' => $request->sexe,
            'user_id' => $user['id']
        ]);

        $member->save();

        // Sending email to member

//        Mail::to($member['email'])->send();

        // Sending email to admin

//        Mail::to('leaderssoftomorrow@gmail.com')->send();

        return redirect()->route('members.form');
    }
}
