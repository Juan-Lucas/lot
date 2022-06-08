<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutMemberController extends Controller
{
    public function __invoke()
    {
        if(session()->has('member_loggedIn') || session('subscribed'))
        {
            session()->pull('member_loggedIn');

            session()->pull('subscribed');

            return redirect()->route('members.login.form');
        }
    }
}
