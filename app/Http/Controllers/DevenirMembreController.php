<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterMemberRequest;
use Illuminate\Http\Request;

class DevenirMembreController extends Controller
{
    public function index()
    {
       return view('pages.membres.devenir-membre');
    }

    public function register(RegisterMemberRequest $request)
    {
        var_dump($request->all());die();
    }
}
