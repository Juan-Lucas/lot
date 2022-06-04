<?php

namespace App\Http\Controllers;

use App\Mail\SendMailAdminMemberRegister;
use App\Mail\SendMailMemberRegister;
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
            'phone' => $request->phone,
            'age' => $request->age,
            'sexe' => $request->sexe,
            'user_id' => $user['id']
        ]);

        $member->save();

        // Sending email to member

        Mail::to($member['email'])
            ->send(new SendMailMemberRegister());

        // Sending email to admin

        Mail::to("contact@leadersoftomorrow-drc.com")
            ->send(new SendMailAdminMemberRegister());

        session()->flash('registred', 'Votre compte a été créé avec succès !');

        return redirect()->route('members.login.form');
    }
}
