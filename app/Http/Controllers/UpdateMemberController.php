<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UpdateMemberController extends Controller
{
    public $photo;

    public function __invoke(Request $request)
    {
        $memberUpdated = Membre::where('user_id', session('member_loggedIn')->user_id)->first();

        $userUpdated = User::find(session('member_loggedIn')->user_id);

//        dd(['photo' => $request->photo->store('membres', 'public')]);

        if ($request->file('photo'))
        {
            $this->photo = File::basename($memberUpdated->photo);

            $memberUpdated->update([
                'nomcomplet' => $request->nomcomplet,
                'phone' => $request->phone,
                'photo' => $request->photo->store('membres', 'public'),
                'email' => $request->email,
                'profession' => $request->profession,
                'bio' => $request->bio,
                'user_id' => session('member_loggedIn')->user_id,
            ]);

            $memberUpdated->save();


            $userUpdated->update([
                'name' => $request->username,
                'email' => $request->email,
            ]);

            $userUpdated->save();

            session()->pull('member_loggedIn');

            session()->put(['member_loggedIn' => $memberUpdated]);

            File::delete(['path' => 'storage/membres'. '/'.$this->photo]);

            session()->flash('updated', 'Votre profile a été modifié avec succès.');

            return redirect()->route('members.profile');
        }


        $memberUpdated->update([
            'nomcomplet' => $request->nomcomplet,
            'phone' => $request->phone,
            'email' => $request->email,
            'profession' => $request->profession,
            'bio' => $request->bio,
            'user_id' => session('member_loggedIn')->user_id,
        ]);

        $userUpdated->update([
            'name' => $request->username,
            'email' => $request->email,
        ]);

        session()->pull('member_loggedIn');

        session()->put(['member_loggedIn' => $memberUpdated]);

        session()->flash('updated', 'Votre profile a été modifié avec succès.');

        return redirect()->route('members.profile');
    }
}
