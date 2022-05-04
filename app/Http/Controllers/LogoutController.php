<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if(session()->has('loggedIn_user'))
        {
            session()->pull('loggedIn_user');
            
            redirect()->route('admin.login');
        }
    }
}
