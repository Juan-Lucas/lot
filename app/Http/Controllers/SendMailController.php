<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{

    public function __invoke(Request $request)
    {
        Mail::to('leaderssoftomorrow@gmail.com')
            ->send(new SendMail($request->all()));
        return redirect()->route('contact.page');
    }
}
