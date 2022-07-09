<?php

namespace App\Http\Controllers;

// use App\Models\Formation;
// use App\Models\FormationMembre;
// use App\Models\Membre;
use App\Models\{User, Formation, FormationMembre, Membre};
use Illuminate\Http\Request;

class MemberSubscriptionController extends Controller
{

    public function __construct()
    {

    }

    public functionindex(int $formationId)
    {
        $formation = Formation::find($formationId);

        if (!session('member_loggedIn'))
        {
            session()->flash('failed', "Vous devez vous enregistrer avant de vous inscrire à cette formation ou vous connecter si vous avez déjà un compte.");

            return redirect()->route('members.login.form');
        }

        $member = Membre::where('user_id', session('member_loggedIn')->user_id)->first();

        $mes_formations = FormationMembre::where('membre_id', session('member_loggedIn')->id)->get();

        foreach ($mes_formations as $form)
        {
            if($member->id === $form->membre_id && $formation->id === $form->formation_id)
            {
                session()->flash('failed', "Vous êtes déjà inscrits à cette formation.");

                return redirect()->route('formations.list');
            }
        }

        $formation_membre = FormationMembre::create([
            'membre_id' => $member->id,
            'formation_id' => $formation->id,
        ]);

        $formation_membre->save();

        session()->put(['subscribed' => $formation_membre]);

        session()->flash('success', "Votre inscription à la formation a réussie.");

        return redirect()->route('formations.show', $formation);
    }
}
