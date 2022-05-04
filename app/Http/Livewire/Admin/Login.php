<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{

    public $name = '';

    public $password = '';

    public function login()
    {

        $user = User::where('name', $this->name)->first();

        if(!$user || !Hash::check($this->password, $user->password))
        {
            session()->flash('error', 'Mot de passe ou nom d\'utilisateur incorrect.');

            $this->name = '';
            $this->password = '';

            return redirect()->back();
        }else{

            session()->put(['loggedIn_user' => $user]);

            return redirect()->route('admin.dashboard');
        }

    }
    public function render()
    {
        return view('livewire.admin.login');
    }
}
