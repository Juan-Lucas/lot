<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutMemberController extends Controller
{
    public function __invoke()
    {
        if(session()->has('member_loggedIn'))
        {
            session()->pull('member_loggedIn');

            return redirect()->route('members.login');
        }
    }
}
