<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        if(session()->has('loggedIn_user'))
        {
            session()->pull('loggedIn_user');

            return redirect()->route('admin.login');
        }
    }
}
