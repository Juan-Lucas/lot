<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{

    public function __invoke(Request $request)
    {
//        dd($request->all());
        Mail::to('contact@leadersoftomorrow-drc.com')
            ->send(new SendMail($request->all()));
//        Mail::to('jeanlucmupasa@gmail.com')
//            ->send(new SendMail($request->all()));

        return redirect()->route('contact.page');
    }
}
